import {CustomerService} from '../../services';

/*state initialization */
import {
  GET_CUSTOMERS,
  GET_CUSTOMER,
} from "../actions/actions.type";
import {SET_CUSTOMERS, SET_CUSTOMER} from "../type/mutations.type";

const initialState = {
  customers: [],
  customer: {},
};

export const state = {...initialState};

/*list of all actions methods(functions) using the async and await principle */
const actions = {

   async [GET_CUSTOMERS](context) {
    const {data} = await CustomerService.getCustomers();
    context.commit(SET_CUSTOMERS, data.data);
    return data;
  },

  async [GET_CUSTOMER](context, payload) {
    const {data} = await CustomerService.getCustomer(payload);
    context.commit(SET_CUSTOMER, data.data);
    return data;
  }
};

/*exporting the mutation*/
export const mutations = {
  [SET_CUSTOMERS](state, customers) {
    state.customers = customers;
  },
  [SET_CUSTOMER](state, customer) {
    state.customer = customer;
  },
  // [RESET_STATE](state) {
  //     state =  {...state, ...initialState};
  // }
};
/* setting the getters*/
const getters = {
  customers(state) {
    return state.customers;
  },
  customer(state) {
    return state.customer;
  },

};

export default {
  state,
  actions,
  mutations,
  getters
};
