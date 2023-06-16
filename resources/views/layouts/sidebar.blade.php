<div class="container">
    <aside>
        <button class="toggle">|||</button>
        <h1 style="margin:0; color:#ddd; padding:10px; border-bottom:1px solid #666">Menu</h1>
        <nav>
            <a href="/">Home</a>
            <ul class="nav flex-column" id="nav_accordion">

                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">News <i class="fa fa-chevron-down"></i></a>
                    @php $categories = App\Models\Category::latest()->take(8)->get();@endphp
                    <ul class="submenu collapse">
                        @foreach ($categories as $category) 
                            <li><a class="nav-link" href="/news-search/{{$category->id}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <a href="/contact-us/create">Contact Us</a>
        </nav>
    </aside>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.nav-link').forEach(function(element){
    
        element.addEventListener('click', function (e) {

        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	

            if(nextEl) {
                e.preventDefault();	
                let mycollapse = new bootstrap.Collapse(nextEl);
                
                if(nextEl.classList.contains('show')){
                mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        });
    }) 
}); 
</script>