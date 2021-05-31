import ExampleComponent from "./components/ExampleComponent";
import AdminHome from "./components/admin/AdminHomeComponent";
import ListPost from "./components/admin/Post/ListPostComponent";

export const routes = [
    {
        path: '/admin/example',
        name: 'example',
        component: ExampleComponent,
    },
    {
        path: '/admin/home',
        name: 'home',
        component: AdminHome
    },
    {
        path: '/admin/list-post',
        name: 'list-post',
        component: ListPost
    }
]
