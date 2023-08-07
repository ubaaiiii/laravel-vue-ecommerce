<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductListResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $query = Product::query()
      ->select([
        'id',
        'title',
        'description',
        'image',
        'price',
        'updated_at',
      ]);

    return DataTables::of($query)->toJson();
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
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
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
   *
   * @param \App\Models\Product $product
   * @return \Illuminate\Http\Response
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
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Models\Product $product
   * @return \Illuminate\Http\Response
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
   *
   * @param \App\Models\Product $product
   * @return \Illuminate\Http\Response
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
