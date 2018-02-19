Vue.http.headers.common['Content-Type'] = "application/json"


new Vue({


  el: '#manage-vue',


  data: {

    items: [],

    pagination: {

        total: 0, 

        per_page: 2,

        from: 1, 

        to: 0,

        current_page: 1

      },

    offset: 4,

    formErrors:{},

    formErrorsUpdate:{},

    newItem : {'name':'','email':''},

    fillItem : {'name':'','email':'','id':''}

  },


  computed: {

        isActived: function () {

            return this.pagination.current_page;

        },

        pagesNumber: function () {

            if (!this.pagination.to) {

                return [];

            }

            var from = this.pagination.current_page - this.offset;

            if (from < 1) {

                from = 1;

            }

            var to = from + (this.offset * 2);

            if (to >= this.pagination.last_page) {

                to = this.pagination.last_page;

            }

            var pagesArray = [];

            while (from <= to) {

                pagesArray.push(from);

                from++;

            }

            return pagesArray;

        }

    },


  ready : function(){

  		this.getVueItems(this.pagination.current_page);

  },


  methods : {


        getVueItems: function(page){

          this.$http.get('api/users?page='+page).then((response) => {

            this.$set('items', response.data);

            this.$set('pagination', response.data.pagination);

          });

        },

      changePage: function (page) {

          this.pagination.current_page = page;

          this.getVueItems(page);

      }


  }


});