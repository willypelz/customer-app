import validationMixin from "../../shared/mixins/validationMixin";
import CustomerListTable from "./../../shared/components/customers/CustomerListTable";
export default {
  name: 'Home',
  components: {
    CustomerListTable,
  },
  data() {
    return {
      currentPage: 1
    };
  }
}
