{{-- <script>
    const tap = document.querySelector('.profile');
  tap.addEventListener('click', function(){
       const toggleMenu = document.querySelector('.menu');
  toggleMenu.classList.toggle('active');
});
</script> --}}
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const profile = document.querySelector('.action .profile');
      const menu = document.querySelector('.action .menu');
      
      profile.addEventListener('click', function() {
          menu.classList.toggle('active');
      });
      
      // Close the menu if clicked outside
      document.addEventListener('click', function(event) {
          if (!profile.contains(event.target) && !menu.contains(event.target)) {
              menu.classList.remove('active');
          }
      });
  });
</script>
