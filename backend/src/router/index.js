import { createRouter, createWebHistory } from "vue-router";

// Components
import AppLayout from "@/components/layouts/AppLayout.vue";

// Views/App
import Dashboard from "@/views/app/Dashboard.vue";
import Products from "@/views/app/Products.vue";

// Views/Auth
import Login from "@/views/auth/Login.vue";
import PasswordForgot from "@/views/auth/PasswordForgot.vue";
import PasswordReset from "@/views/auth/PasswordReset.vue";
import Register from "@/views/auth/Register.vue";

// Views/Errors
import NotFound from "@/views/errors/NotFound.vue";

import store from "@/store";

const routes = [
  {
    path: '/app',
    name: 'app',
    component: AppLayout,
    meta: {
      requiresAuth: true
    },
    children: [
      {
        path: 'dashboard',
        name: 'app.dashboard',
        component: Dashboard,
      },
      {
        path: 'products',
        name: 'app.products',
        component: Products,
      },
    ]
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
    meta: {
      requiresGuest: true
    }
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: {
      requiresGuest: true
    }
  },
  {
    path: '/forgot-password',
    name: 'forgot-password',
    component: PasswordForgot,
    meta: {
      requiresGuest: true
    }
  },
  {
    path: '/forgot-password/:token',
    name: 'reset-password',
    component: PasswordReset,
    meta: {
      requiresGuest: true
    }
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth && !store.state.user.token) {
    next({
      name: 'login'
    })
  } else if (to.meta.requiresGuest && store.state.user.token) {
    next({
      name: 'app.dashboard'
    })
  } else if (!router.hasRoute(to.name)) {
    next({
      name: 'login'
    })
  } else {
    next()
  }
})

export default router
