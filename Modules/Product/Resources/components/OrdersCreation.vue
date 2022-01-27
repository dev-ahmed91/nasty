<template>
    <div class="row">
        <div class="table-filters col-md-12 mb-4">
            <div class="row">
                <div class="col-sm-6 col-md-3 mb-1">
                    <div class="input-group  search-area d-xl-inline-flex  mr-1" >
                        <input type="text" v-on:keyup.enter="fetchProduct()" class="form-control" placeholder="Search here..." v-model="q">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="javascript:void(0)" v-on:click="fetchProduct()"><i class="flaticon-381-search-2"></i></a>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <form method="POST" :action="route('admin.orders.store')">
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
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="product in products">
                                    <td><strong>{{ product.id }}</strong></td>
                                    <td width="200px"><a :href="route('admin.products.show', {'product': product.id})"><img width="100%" class=" img-thumbnail"  :src="product.image"></a></td>
                                    <td><a :href="route('admin.products.show', {'product': product.id})">{{ product.name }}</a></td>
                                    <td>{{ product.price }} LE</td>
                                    <td>{{ product.category ? product.category.name  : '' }}</td>
                                    <td width="40px"><input type="number" :name="'products['+product.id+']'" :value="1"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-3 bmd-form-group  ">
                    <select name="branch_id" class="form-control">
                        <option v-for="(name, id) in JSON.parse(branches)" :value="id">{{ name }}</option>
                    </select>
                </div>

                <div class="form-group col-md-3 bmd-form-group  ">
                    <input name="full_name" type="text"  class="form-control" placeholder="Full Name">
                </div>

                <div class="form-group col-md-3 bmd-form-group  ">
                    <input name="phone" type="text"  class="form-control" placeholder="Phone">
                </div>

                <div class="form-group col-md-6 bmd-form-group  ">
                    <input name="address" type="text"  class="form-control" placeholder="Address">
                </div>
                <button type="submit" class="btn btn-block btn-primary">Place Order</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'orders-creation',
    props: ['branches'],
    data: function () {
        return {
            'q' : '',
            'products' : [],
        }
    },
    created() {
    },
    methods: {
        fetchProduct() {
            if(this.q != '') {
                axios
                .get(route('api.products.show', {
                        product : this.q,
                    }))
                    .then(response => {
                        this.products.push(response.data);
                        this.q = '';
                    }).catch(function (error) {
                        if(error.response.status === 404) {
                            alert('Item with this ID is not Found.')
                        }
                    });
            }
        }
    }
}
</script>
