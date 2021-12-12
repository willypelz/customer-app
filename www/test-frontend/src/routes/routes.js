import HomeLayout from '@/home/layout/Layout.vue';

const routes = [
  {
    path: '/',
    redirect: 'customers',
    component: HomeLayout,
    children: [
      {
        path: '/home',
        name: 'home',
        component: () => import( '../dashboard/customers/Customers.vue')
      },
      {
        path: '/customers',
        name: 'customers',
        component: () => import( '../dashboard/customers/Customers.vue')
      },
      {
        path: '/customers/:slug',
        name: 'customer',
        component: () => import( '../dashboard/customer/Customer.vue')
      }
    ]
  },

];

export default routes;
