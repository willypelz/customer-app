export default {
  name: 'Breadcrumb',
  data() {
    return {
      pageTitle: {},
      breadcrumbList: []
    }
  },
  methods: {
    updateList() {
      this.breadcrumbList = this.$route.meta.breadcrumb;
      this.pageTitle = this.$route.meta.pageTitle;
    }
  },
  watch: {
    '$route'() {
      this.updateList();
    }
  },
  mounted() {
    this.updateList();
  }
}
