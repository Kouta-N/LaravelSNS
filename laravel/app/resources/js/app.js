import "./bootstrap";
import Vue from "vue";
import ArticleLike from "./components/ArticleLike";
import ArticleTags from "./components/ArticleTags";

const app = new Vue({
    el: "#app",
    components: {
        ArticleLike,
        ArticleTags
    }
});
