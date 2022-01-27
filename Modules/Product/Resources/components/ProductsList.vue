<template>
    <div class="row">
        <div class="table-filters col-md-12 mb-4">
            <div class="row">
                <div class="col-sm-6 col-md-3 mb-1">
                    <div class="input-group  search-area d-xl-inline-flex  mr-1" >
                        <input type="text" v-on:keyup.enter="fetchProducts()" class="form-control" placeholder="Search here..." v-model="q">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="javascript:void(0)" v-on:click="fetchProducts()"><i class="flaticon-381-search-2"></i></a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-3 mb-1">
                    <div class="input-group  d-xl-inline-flex">
                        <a class="btn btn-primary" :href="route('admin.products.create', {page: page})" title="New"><i class="la la-plus"></i></a>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 mb-1">
                    <div class="input-group search-area d-xl-inline-flex ">
                        <div class="dropdown " style="width: 100%">
                            <a href="javascript:void(0)"  class="btn btn-rounded btn-primary" style="width: 100%" data-toggle="dropdown" aria-expanded="false">
                                <i class="las la-bolt scale5"></i>
                                {{ currentCategoryName }}
                                <i class="las la-angle-down "></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-center">
                                <a v-for="(category, id) in JSON.parse(categories)" v-on:click="changeCategory(category, id)" class="dropdown-item text-primary" href="javascript:void(0);"><span >{{ category }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 mb-1 ml-auto">
                    <div class="input-group search-area d-xl-inline-flex">
                        <div class="dropdown " style="width: 100%">
                            <a href="javascript:void(0)" :class="'btn-'+sort.class" class="btn btn-rounded " style="width: 100%" data-toggle="dropdown" aria-expanded="false">
                                <i class="las la-sort-amount-down-alt scale5"></i>

                                {{  sort.label }}
                                <i class="las la-angle-down "></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-center">
                                <a v-for="productSort in sorts" v-on:click="changeSort(productSort)" class="dropdown-item" href="javascript:void(0);"><span :class="'text-'+productSort.class">{{ productSort.label }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md text-small">
                            <thead>
                            <tr>
                                <th class="width10">#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="product in products.data">
                                <td><strong>{{ product.id }}</strong></td>
                                <td width="200px"><a :href="route('admin.products.show', {'product': product.id})"><img width="100%" class=" img-thumbnail"  :src="product.image"></a></td>
                                <td><a :href="route('admin.products.show', {'product': product.id})">{{ product.name }}</a></td>
                                <td>{{ product.price }} LE</td>
                                <td>{{ parseInt(product.stock) }}</td>
                                <td>{{ product.category ? product.category.name  : '' }}</td>
                                <td>
                                    <span v-bind:class="{ 'badge-success' : (product.status === 2) , 'badge-light' : (product.status === 1) }" class="badge">{{ product.statusLabel }}</span>
                                </td>
                                <td>{{ moment(product.created_at).format('DD MMM YYYY') }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn  btn-success light sharp" data-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" :href="route('admin.products.edit', {product: product.id, page: page})">Edit</a>
                                            <a class="dropdown-item" :href="route('admin.products.stock.create', {product: product.id, page: page})">Add Stock <i class="la la-plus"></i></a>
                                            <a class="dropdown-item" :href="route('admin.products.enable', {product: product.id, page: page})">Enable</a>
                                            <a class="dropdown-item" :href="route('admin.products.disable', {product: product.id, page: page})">Disable</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <pagination :limit="8" :data="products" :show-disabled="true" @pagination-change-page="fetchProducts">
                            <span slot="prev-nav">&lt;</span>
                            <span slot="next-nav">&gt;</span>
                        </pagination>



                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'products-list',
    props: ['categories'],
    data: function () {
        return {
            'q' : '',
            'sort': { 'id' : 'products.id', 'direction': 'DESC', 'label' : 'Sort', 'class' : ''},
            'products' : {},
            'currentCategory' : '',
            'currentCategoryName': 'Categories',
            'page' : 1,
            'sorts' : []
        }
    },
    created() {
        this.fetchProducts();
        this.fetchSorts();
    },
    methods: {
        fetchProducts(page = 1) {
            this.page = page;
            axios
                .get(route('api.products.index', {
                    page: page,
                    q : this.q,
                    sort : this.sort.id,
                    direction : this.sort.direction,
                    category: this.currentCategory
                }))
                .then(response => {
                    this.products = response.data;
            });
            },
            fetchSorts() {
                this.sorts = {
                    1: { 'id' : 'products.id', 'direction': 'DESC', 'label' : 'Created DESC', 'class' : 'dark'},
                    2: { 'id' : 'products.id', 'direction': 'ASC', 'label' : 'Created ASC', 'class' : 'dark'},
                };
            },
            changeSort(sort) {
                this.sort = (sort !== undefined) ? this.sort = sort : '';
                this.fetchProducts();
            },
            changeCategory(categoryName, id) {
                this.currentCategory = (id !== undefined) ? this.currentCategory = id : '';
                this.currentCategoryName = (categoryName !== undefined) ? this.currentCategoryName = categoryName : '';
                this.fetchProducts();
            },
        }
    }
</script>
