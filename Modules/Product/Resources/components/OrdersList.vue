<template>
    <div class="row">
        <div class="table-filters col-md-12 mb-4">
            <div class="row">
                <div class="col-sm-6 col-md-3 mb-1">
                    <div class="input-group  search-area d-xl-inline-flex  mr-1" >
                        <input type="text" v-on:keyup.enter="fetchOrders()" class="form-control" placeholder="Search here..." v-model="q">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="javascript:void(0)" v-on:click="fetchOrders()"><i class="flaticon-381-search-2"></i></a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-1 col-sm-3 mb-1">
                    <div class="input-group  d-xl-inline-flex">
                        <a class="btn btn-primary" :href="route('admin.orders.create', {page: page})" title="New"><i class="la la-plus"></i></a>
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
                                <a v-for="orderSort in sorts" v-on:click="changeSort(orderSort)" class="dropdown-item" href="javascript:void(0);"><span :class="'text-'+orderSort.class">{{ orderSort.label }}</span></a>
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Products</th>

                                <th>Total</th>
                                <th>Type</th>
                                <th>Creation</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="order in orders.data">
                                <td><strong>{{ order.id }}</strong></td>
                                <td>{{ order.full_name }}</td>
                                <td>{{ order.phone }}</td>
                                <td>
                                    <p v-for="product in order.products">{{ parseInt(product.pivot.quantity)+' x '+product.pivot.name}} ({{ product.pivot.price }} LE)</p>
                                </td>
                                <td>{{ order.total }} LE</td>
                                <td>{{ order.typeLabel }}</td>

                                <td>{{ moment(order.created_at).format('DD MMM YYYY') }}</td>
                            </tr>

                            </tbody>
                        </table>
                        <pagination :limit="8" :data="orders" :show-disabled="true" @pagination-change-page="fetchOrders">
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
    name: 'orders-list',
    data: function () {
        return {
            'q' : '',
            'sort': { 'id' : 'orders.id', 'direction': 'DESC', 'label' : 'Sort', 'class' : ''},
            'orders' : {},
            'page' : 1,
            'sorts' : []
        }
    },
    created() {
        this.fetchOrders();
        this.fetchSorts();
    },
    methods: {
        fetchOrders(page = 1) {
            this.page = page;
            axios
                .get(route('api.orders.index', {
                    page: page,
                    q : this.q,
                    sort : this.sort.id,
                    direction : this.sort.direction,
                }))
                .then(response => {
                    this.orders = response.data;
            });
            },
            fetchSorts() {
                this.sorts = {
                    1: { 'id' : 'orders.id', 'direction': 'DESC', 'label' : 'Created DESC', 'class' : 'dark'},
                    2: { 'id' : 'orders.id', 'direction': 'ASC', 'label' : 'Created ASC', 'class' : 'dark'},
                };
            },
            changeSort(sort) {
                this.sort = (sort !== undefined) ? this.sort = sort : '';
                this.fetchOrders();
            },
        }
    }
</script>
