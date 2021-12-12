import Vue from 'vue';
/*using the  vuex as the state management which also have object storing ability*/
import Vuex from 'vuex';
import customer from './modules/customer.module';

/*registering vuex application*/
Vue.use(Vuex);
const modules = {
  customer,
};

/*exporting the vuex store for the application to use */
export default new Vuex.Store({
  modules
});
