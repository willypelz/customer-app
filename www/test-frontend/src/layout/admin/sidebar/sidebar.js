import {UserData} from "@/mixins/UserData";
import {logoutUser} from "../../../utils/cache";

export default {
  name: 'TheSidebar',
  mixins: [UserData],
  data() {
    return {

    }
  },
  methods: {
    logout(){
      logoutUser();
    }
  },
  mounted() {
  }
}
