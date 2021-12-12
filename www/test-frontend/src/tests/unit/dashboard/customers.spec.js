import {createLocalVue,shallowMount} from '@vue/test-utils';
import Customers from '../../../dashboard/customers/Customers.vue';
import Vuex from "vuex";

const localVue = createLocalVue();
localVue.use(Vuex);

describe("Customers", () => {

  let wrapper;
  let store;
  let actions;

  actions = {
    Customers: jest.fn(),

  };
  store = new Vuex.Store({
    actions,
  });

  beforeEach(() => {
    wrapper = shallowMount(Customers, {
      store,
      localVue
    });
  });

  it('renders without errors', () => {
    expect(wrapper.isVueInstance()).toBeTruthy();
  });

  // lifecycle test
  it('has a data hook in the component', () => {
    expect(typeof Customers.data).toBe('function')
  });

});
