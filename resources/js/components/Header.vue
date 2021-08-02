<template>
  <section>
      <nav class="d-flex align-content-end justify-content-center">
          <ul class="d-flex align-items-center">
              <li :class="(links.active) ? 'active' : '' "   v-for="(links, index) in navLinks" :key="index">
                  <router-link :to="links.route">
                      {{ links.link }}
                  </router-link>
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
                    route: '/',
                    active: false
                },
                {
                    link: 'Blog',
                    route: '/Blog',
                    active: false
                },
                {
                    link: 'chi siamo',
                    route: '/About',
                    active: false
                },
                {
                    link: 'contatti',
                    route: '/Contacts',
                    active: false
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
        margin: 0;
        
        li {
            display: inline-block;
            height: 100%;
            color: #242424;
            text-align: center;
            text-transform: capitalize;
            display: flex;
            align-items: flex-end;
            a {
                vertical-align: middle;
                display: inline-block;
                padding: 8px 16px;
            }
            &.active,
            &:hover {
                background-color: darken($color: #f1f4f9, $amount: 3);
            }
        }
    }
}

</style>