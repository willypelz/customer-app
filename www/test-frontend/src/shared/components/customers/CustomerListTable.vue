<template>
  <b-card no-body>
    <b-card-header class="border-0">
      <h3 class="mb-0">Customers</h3>

    </b-card-header>
    <el-input
      placeholder="Table Search with Customer ID"
      v-model="search"
      class="search-form">
      <i slot="prefix" class="el-input__icon el-icon-search"></i>
    </el-input>
    <el-table class="table-responsive table"
              header-row-class-name="thead-light"
              :data="customers.filter(data => !search || data.id.toLowerCase().includes(search.toLowerCase()))">
      <el-table-column label="S/N"
                       min-width="110px"
                       prop="name">
        <template v-slot="{row}">
              <span class="font-weight-600 name mb-0 text-sm">{{row.id}}</span>
        </template>
      </el-table-column>

      <el-table-column label=" First Name"
                       min-width="140px"
                       prop="status">
        <template v-slot="{row}">
          <span class="font-weight-600 name mb-0 text-sm">{{row.first_name}}</span>

        </template>
      </el-table-column>

      <el-table-column label=" Last Name"
                       min-width="140px"
                       prop="status">
        <template v-slot="{row}">
          <span class="font-weight-600 name mb-0 text-sm">{{row.last_name}}</span>

        </template>
      </el-table-column>

      <el-table-column label="Customer Email"
                       min-width="290px"
                       prop="status">
        <template v-slot="{row}">
          <span class="font-weight-600 name mb-0 text-sm">{{row.email}}</span>

        </template>
      </el-table-column>

      <el-table-column label=" Gender"
                       prop="completion"
                       min-width="120px">
        <template v-slot="{row}">
          <span class="font-weight-600 name mb-0 text-sm" >{{row.gender}}</span>

        </template>
      </el-table-column>


      <el-table-column label=" Company"
                       prop="completion"
                       min-width="140px">
        <template v-slot="{row}">
          <span class="font-weight-600 name mb-0 text-sm" >{{row.company}}</span>

        </template>
      </el-table-column>

      <el-table-column label=" City"
                       prop="completion"
                       min-width="200px">
        <template v-slot="{row}">
          <span class="font-weight-600 name mb-0 text-sm" >{{row.city}}</span>

        </template>
      </el-table-column>

      <el-table-column label="Actions"
                       prop="completion"
                       min-width="240px">
        <template v-slot="{row}">
          <div class="d-flex align-items-center">
            <router-link class="btn btn-primary btn-sm" :to="{name: 'customer', params: {slug: row.id}}">
               <i class="fa fa-eye"></i>
            </router-link>
          </div>
        </template>
      </el-table-column>
    </el-table>

    <b-card-footer class="py-4 d-flex justify-content-end">
      <base-pagination v-model="currentPage" :per-page="10" :total="50"></base-pagination>
    </b-card-footer>
  </b-card>
</template>
<script>
    import {mapGetters} from "vuex";
    import {Table, TableColumn} from 'element-ui'
    import { GET_CUSTOMERS} from "../../../store/actions/actions.type";

    export default {
        name: 'customer-list',
        components: {
            [Table.name]: Table,
            [TableColumn.name]: TableColumn
        },
        data() {
            return {
                search: null,
                currentPage: 1,
                name: '',
                title: '',
                description: '',
                titleState: null,
                descriptionState: null,
            };
        },
        methods: {
            getCustomers() {
                this.$store.dispatch(GET_CUSTOMERS)
                    .then((res) => {
                            console.log('response', res)
                        },
                        (err) => {
                            this.errors = err.response.data.errors;
                        }
                    );
            },


            deleteCustomer(slug){
            }
        },
        mounted() {
            this.getCustomers();
        },
        computed: {
            ...mapGetters(['customers', 'user'])
        }
    }


</script>
