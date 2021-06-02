<template>
    <div class="app-container">
        <el-row class="toolbar">
            <el-col :span="24">
                <el-button type="primary" @click="create()" icon="el-icon-plus"
                           plain size="small" style="float: right;">Thêm Mới</el-button>
            </el-col>
        </el-row>
        <el-table v-loading="listLoading" :data="posts" element-loading-text="Loading" border fit highlight-current-row>
            <el-table-column align="center" label="ID" prop="id">
            </el-table-column>
            <el-table-column align="center" label="Title" prop="title">
            </el-table-column>
            <el-table-column align="center" label="Content" prop="content">
            </el-table-column>
            <el-table-column align="center" label="Images" prop="images">
            </el-table-column>
            <el-table-column align="center" label="Slug" prop="slug">
            </el-table-column>
            <el-table-column align="center" label="Tags" prop="tags">
            </el-table-column>
            <el-table-column align="center" label="Action">
                <template slot-scope="scope">
                    <el-button size="mini">Edit</el-button>
                    <el-button size="mini">Delete</el-button>
                </template>
            </el-table-column>
        </el-table>
    </div>
</template>


<script>
import { getList } from '@/api/table';
import Resource from '../../api/resource'

const postResource = new Resource('v1/post')

export default {
    filters: {
        statusFilter(status) {
            const statusMap = {
                published: 'success',
                draft: 'gray',
                deleted: 'danger',
            };
            return statusMap[status];
        },
    },
    data() {
        return {
            list: null,
            listLoading: true,
            posts: [],
            post:{
                id: '',
                title: '',
                content: '',
                images: '',
                user_id: '',
                slug: '',
                tags: '',
                status: '',
            },
        };
    },
    created() {
        this.fetchData();
    },
    methods: {
        async fetchData() {
            this.listLoading = true;
            const res = await postResource.list({});
            console.log(res.data.items);
            this.posts = res.data.items;
            this.listLoading = false;
        },
        create() {
            this.$router.push({ path: '/post/create' });
        }

    },
};
</script>
