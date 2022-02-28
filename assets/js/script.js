// const swiperVarian = [
//   'swiper-container-xpander',
//   'swiper-container-xpander-cross',
//   'swiper-container-pajero-sport',
//   'swiper-container-eclipse-cross',
//   'swiper-container-outlander-sport',
//   'swiper-container-triton',
//   'swiper-container-l300',
// ]
// const swiperPagination = [
//   'swiper-pagination-xpander',
//   'swiper-pagination-xpander-cross',
//   'swiper-pagination-pajero-sport',
//   'swiper-pagination-eclipse-cross',
//   'swiper-pagination-outlander-sport',
//   'swiper-pagination-triton',
//   'swiper-pagination-l300',
// ]
// const swiperNext = [
//   'swiper-button-next-xpander',
//   'swiper-button-next-xpander-cross',
//   'swiper-button-next-pajero-sport',
//   'swiper-button-next-eclipse-cross',
//   'swiper-button-next-outlander-sport',
//   'swiper-button-next-triton',
//   'swiper-button-next-l300',
// ]
// const swiperPrev = [
//   'swiper-button-prev-xpander',
//   'swiper-button-prev-xpander-cross',
//   'swiper-button-prev-pajero-sport',
//   'swiper-button-prev-eclipse-cross',
//   'swiper-button-prev-outlander-sport',
//   'swiper-button-prev-triton',
//   'swiper-button-prev-l300',
// ]

// for (let i = 0; i < swiperVarian.length; i++) {
//   const swiper = new Swiper(`.${swiperVarian[i]}`, {
//     spaceBetween: 10,
//     pagination: {
//       el: `.${swiperPagination[i]}`,
//       clickable: true,
//     },
//     navigation: {
//       nextEl: `.${swiperNext[i]}`,
//       prevEl: `.${swiperPrev[i]}`,
//     },
//     breakpoints: {
//       600: {
//         slidesPerView: 2,
//       },
//       300: {
//         slidesPerView: 1,
//       },
//     },
//   })
// }

const swiperTestimoni = new Swiper('.swiper-container-xpander', {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination-xpander',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next-xpander',
    prevEl: '.swiper-button-prev-xpander',
  },
  breakpoints: {
    800: {
      slidesPerView: 3,
    },
    600: {
      slidesPerView: 2,
    },
    300: {
      slidesPerView: 1,
    },
  },
})
