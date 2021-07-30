<template>
  <section>
      <nav class="d-flex align-content-end justify-content-center">
          <ul class="d-flex align-items-center">
              <li v-for="(links, index) in navLinks" :key="index">
                  <a href="#">
                      {{ links.link }}
                  </a>
              </li>
          </ul>
      </nav>
  </section>
</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            navLinks: [        
                {
                    link: 'home',
                    active: 'true'
                },
                {
                    link: 'Blog',
                    active: 'false'
                },
                {
                    link: 'chi siamo',
                    active: 'false'
                },
                {
                    link: 'contatti',
                    active: 'false'
                }
            ] 
        }
    }
}
</script>

<style lang="scss" scoped>

nav {
    height: 80px;
    background-color: #f1f4f9;
    ul {
        list-style: none;
        
        li {
            display: inline;
            padding: 8px 16px;
            color: #242424;
            text-align: center;
            text-transform: capitalize;
            &:hover {
                background-color: darken($color: #f1f4f9, $amount: 3);
            }
        }
    }
}

</style>