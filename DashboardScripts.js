var Opensidebar= 'true';

toggleButton.addEventListener( 'click', (event) => {
    event.preventDefault();

    if(Opensidebar){
        dashboardSideBar.style.width = '10%';
        dashboardSideBar.style.transition = '0.7s all';
        dashboardContent_Container.style.width = '90%';
        dashboardLogo.style.fontSize = '20px';
        UserImg.style.width = '20px';

        menuIcons = document.getElementsByClassName('menuText');
        for(var i =0; i < menuIcons.length;i++){
            menuIcons[i].style.display = 'none';
        }
        document.getElementsByClassName('dashboardSideBar_Menu_lists')[0].style.textAlign = 'center';
        Opensidebar = false;
        
    }else {
        dashboardSideBar.style.width = '300px';
        dashboardContent_Container.style.width = '100%';
        dashboardLogo.style.fontSize = '45px';
        UserImg.style.width = '60px';

        menuIcons = document.getElementsByClassName('menuText');
        for(var i =0; i < menuIcons.length;i++){
            menuIcons[i].style.display = 'inline-block';
        }
        document.getElementsByClassName('dashboardSideBar_Menu_lists')[0].style.textAlign = 'left';
        Opensidebar = true;
        }
});