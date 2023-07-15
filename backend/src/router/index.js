import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import PasswordForgot from "../views/PasswordForgot.vue";
import PasswordReset from "../views/PasswordReset.vue";
import Register from "../views/Register.vue";

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
        path: '/dashboard',
        name: 'app.dashboard',
        component: Dashboard,
      },
      {
        path: '/products',
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
      reqiureGuest: true
    }
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
    meta: {
      reqiureGuest: true
    }
  },
  {
    path: '/forgot-password',
    name: 'forgot-password',
    component: PasswordForgot,
    meta: {
      reqiureGuest: true
    }
  },
  {
    path: '/forgot-password/:token',
    name: 'reset-password',
    component: PasswordReset,
    meta: {
      reqiureGuest: true
    }
  },
  {
    path: '/:pathmatch(.*)',
    name: 'notfound',
    component: NotFound,
    meta: {
      reqiureGuest: true
    }
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

router.beforeEach((to, from, next) => {
  if (to.meta.reqiureAuth && !store.state.user.token) {
    return next({
      name: 'login'
    })
  } else if (to.meta.reqiureGuest && store.state.user.token) {
    return next({
      name: 'app.dashboard'
    })
  } else {
    return next()
  }
})

export default router
