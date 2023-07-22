<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductListResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $perPage = request('per_page', 10);
    $search = request('search', '');
    $sortField = request('sort_field', 'updated_at');
    $sortDirection = request('sort_direction', 'desc');

    $query = Product::query()
      ->where('title', 'like', "%{$search}%")
      ->orderBy($sortField, $sortDirection)
      ->paginate($perPage);

    return ProductListResource::collection($query);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(ProductRequest $request)
  {
    $data = $request->validated();
    $data['created_by'] = $request->user()->id;
    $data['updated_by'] = $request->user()->id;

    /** @var \Illuminate\Http\UploadedFile $image */
    $image = $data['image'] ?? null;

    // check if image was given and save on local file system
    if ($image) {
      $relativePath = $this->saveImage($image);
      $data['image'] = URL::to(Storage::url($relativePath));
      $data['image_mime'] = $image->getClientMimeType();
      $data['image_size'] = $image->getSize();
    }

    $product = Product::create($data);

    return new ProductResource($product);
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    return new ProductResource($product);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Product $product)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(ProductRequest $request, Product $product)
  {
    $data = $request->validated();
    $data['updated_by'] = $request->user()->id;

    /** @var \Illuminate\Http\UploadedFile $image */
    $image = $data['image'] ?? null;

    if ($image) {
      $relativePath = $this->saveImage($image);
      $data['image'] = URL::to(Storage::url($relativePath));
      $data['image_mime'] = $image->getClientMimeType();
      $data['image_size'] = $image->getSize();

      if ($product->image) {
        Storage::deleteDirectory('/public/' . dirname($product->image));
      }
    }

    $product->update($data);

    return new ProductResource($product);

  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Product $product)
  {
    $product->delete();

    return response()->noContent();
  }

  private function saveImage(UploadedFile $image)
  {
    $path = 'images/' . Str::random();
    if (!Storage::exists($path)) {

    }
  }
}
