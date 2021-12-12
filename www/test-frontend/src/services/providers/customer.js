import BaseHandler from '../../handler/base.handler';

class CustomerProvider extends BaseHandler {
  createCustomer(payload) {
    return this.post('/customers', payload)
  }
  getCustomers() {
    return this.get('/customers')
  }
  getCustomer(slug) {
    return this.get('/customers/' + slug)
  }
  updateCustomer(slug, payload){
    return this.put('/customers/' + slug, payload)
  }
  deleteCustomer(slug) {
    return this.delete('/customers/' + slug)
  }

}

export default CustomerProvider;
