// grab navigation of menu list
const menu_list_nav = document.querySelectorAll('.menu_list_nav');
const menu_list_nav_prime = menu_list_nav[0];

// grab posts with class .tab-pane
const menu_list_content = document.querySelectorAll('.tab-pane');
const menu_list_content_prime = menu_list_content[0];


menu_list_content_prime.classList += ' show active';
menu_list_nav_prime.classList = 'active';

menu_list_nav.onclick = function test() {
  menu_list_content.classList.toggle('show active')
}
