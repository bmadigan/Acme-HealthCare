<template>
    <div class="mt-2">
        <table-component
            :data="[
                { firstName: 'John', birthday: '04/10/1940', songs: 72 },
                { firstName: 'Paul', birthday: '18/06/1942', songs: 70 },
                { firstName: 'George', birthday: '25/02/1943', songs: 22 },
                { firstName: 'Ringo', birthday: '07/07/1940', songs: 2 },
                { firstName: 'Brett', birthday: '04/10/1940', songs: 72 },
                { firstName: 'Steven Beven', birthday: '18/06/1942', songs: 70 },
                { firstName: 'Georgie Porgie', birthday: '25/02/1943', songs: 22 },
                { firstName: 'Harry Berry', birthday: '07/07/1940', songs: 2 },
            ]"
            sort-by="songs"
            sort-order="asc"
            table-class="table"
            show-filter="false"
        >
            <table-column show="firstName" label="First name" header-class="table-thead" cell-class="table-tbody"></table-column>
            <table-column show="songs" label="Songs" data-type="numeric" header-class="table-thead" cell-class="table-tbody"></table-column>
            <table-column show="birthday" label="Birthday" :filterable="false" data-type="date:DD/MM/YYYY" header-class="table-thead" cell-class="table-tbody"></table-column>
        </table-component>
    </div>
</template>

<script>
    import { TableComponent, TableColumn } from 'vue-table-component';

    Vue.component('table-component', TableComponent);
    Vue.component('table-column', TableColumn);

    export default {

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
