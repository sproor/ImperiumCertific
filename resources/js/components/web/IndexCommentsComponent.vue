<template>
    <div class="comments">
        <div class="comments-container">
            <div class="comments-left">
                <img :src="avatar_image_src" alt="">
            </div>
            <div class="comments-right">
                <div class="comments-content">
                    <h3 class="title">
                        Що говорять наші клієнти
                    </h3>
                    <img :src="logo_image_src" alt="avatar human" class="log">
                    <p class="text">
                        ISO 22000:2018 «Система менеджменту безпечності харчової продукції. Вимоги до організацій які здійснюють виробництво харчової продукції» – стандарт, який встановлює вимоги до системи менеджменту безпечності  харчових продуктів.
                    </p>
                    <h4 class="fullname">
                        Владислав Воробченко
                    </h4>
                    <h5 class="position">
                        Керівник комерційного відділу
                    </h5>
                </div>
                <div class="switch">
                    <div class="buttons">
                        <button class="left">
                            <img alt="arrow" :src="arrow_image_src">
                        </button>
                        <button class="right">
                            <img alt="arrow" :src="arrow_image_src">
                        </button>
                    </div>
                    <div class="progress">
                        <div class="horizontal-line active"></div>
                        <div class="horizontal-line "></div>
                        <div class="horizontal-line "></div>
                        <div class="horizontal-line "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "IndexCommentsComponent",
    data() {
        return {
            avatar_image_src: '/assets/home/comments/photo.jpg',
            arrow_image_src: '/assets/arrow.svg',
            logo_image_src: '/assets/home/comments/logo-company.png',
            book_category_image_src: '/public/assets/study_zone/student/educational_material/category_book.png',

        }
    },
}
</script>

<style scoped>

</style>
