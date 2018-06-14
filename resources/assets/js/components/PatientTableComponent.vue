<template>
    <div>
        <div class="flex justify-between items-center border-b pb-3 mb-8">
            <h1 class="text-2xl text-blue-darker">Your Patient Listing</h1>
            <button class="btn btn-secondary text-sm">
                <i class="fas fa-plus-circle mr-2"></i> ADD PATIENT
            </button>
        </div>

        <div class="segment">
            <div class="mt-2">
                <table-component
                    :data="getPatients"
                    :sort-by="name"
                    :sort-order="asc"
                    table-class="table"
                    :show-filter=false
                >
                    <table-column :sortable=false show="name" label="Patient Name" header-class="table-thead" cell-class="table-tbody font-bold"></table-column>
                    <table-column :sortable=false show="patient_number" label="Patient Num" header-class="table-thead" cell-class="table-tbody"></table-column>
                    <table-column :sortable=false show="health_status" label="Status" :filterable="false" header-class="table-thead" cell-class="table-tbody"></table-column>
                    <table-column :sortable=false show="email" label="Email" header-class="table-thead" cell-class="table-tbody"></table-column>
                    <table-column :sortable=false show="medicare_id" label="Medicare ID" header-class="table-thead" cell-class="table-tbody"></table-column>
                </table-component>
            </div>
        </div>
    </div>
</template>

<script>
    import { TableComponent, TableColumn } from 'vue-table-component';
    import axios from 'axios';

    Vue.component('table-component', TableComponent);
    Vue.component('table-column', TableColumn);

    export default {
        methods: {
            async getPatients() {
                const response = await axios.get('/patients');
                return response;
            }
        }
    }
</script>
