<template>
  <component :is="currentComponent" />
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'

const currentComponent = ref(null)

function detectMobile() {
  return /Mobi|Android|iPhone|iPad|iPod|Opera Mini|IEMobile/i.test(navigator.userAgent)
    || window.matchMedia('(max-width: 768px)').matches
}

let mediaQuery

async function loadComponent() {
  if (detectMobile()) {
    currentComponent.value = (await import('./MobileHero.vue')).default
  } else {
    currentComponent.value = (await import('./DesktopHero.vue')).default
  }
}

onMounted(() => {
  loadComponent()
  mediaQuery = window.matchMedia('(max-width: 768px)')
  mediaQuery.addEventListener?.('change', loadComponent)
  if (!mediaQuery.addEventListener) mediaQuery.addListener(loadComponent)
})

onBeforeUnmount(() => {
  if (!mediaQuery) return
  mediaQuery.removeEventListener?.('change', loadComponent)
  if (!mediaQuery.removeEventListener) mediaQuery.removeListener(loadComponent)
})
</script>
