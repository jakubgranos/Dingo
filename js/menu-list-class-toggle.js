// grab navigation of menu list
const menu_list_nav = document.querySelectorAll('.menu_list_nav');

// grab posts with class .tab-pan
const menu_list_content = document.querySelectorAll('.tab-pane');

if (menu_list_nav) {
  const menu_list_nav_prime = menu_list_nav[0];
  menu_list_nav_prime.classList.add('active');
}

if (menu_list_content) {
  const menu_list_content_prime = menu_list_content[0];
  menu_list_content_prime.classList.add('active', 'show');
}

menu_list_nav.onclick = function active() {
  menu_list_content.classList.toggle('show active')
}
