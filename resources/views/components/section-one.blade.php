{{-- Section delle card categorie fare modifiche css --}}




{{-- <div class="container">
	<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
		<div class="col">
			<div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background-image: url('https://images.unsplash.com/photo-1580133748682-099a97d17e6c?crop=entropy&amp;amp;cs=tinysrgb&amp;amp;fit=crop&amp;amp;fm=jpg&amp;amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTV8fGplbGx5JTIwZmlzaHxlbnwwfDB8fHwxNjIxNTA0MDU1&amp;amp;ixlib=rb-1.2.1&amp;amp;q=80&amp;amp;w=1080&amp;amp;h=768'); background-size:cover">
				<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					<div class="lc-block pt-5 mt-5 mb-4">
						<div editable="rich">
							<h2 class="display-6 lh-1 fw-bold">Offerte in corso</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
					<ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a class="btn btn-link btn-sm text-white " href="#" role="button">Read more</a></ul>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background:url(https://images.unsplash.com/photo-1580133748682-099a97d17e6c?crop=entropy&amp;amp;cs=tinysrgb&amp;amp;fit=crop&amp;amp;fm=jpg&amp;amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTV8fGplbGx5JTIwZmlzaHxlbnwwfDB8fHwxNjIxNTA0MDU1&amp;amp;ixlib=rb-1.2.1&amp;amp;q=80&amp;amp;w=1080&amp;amp;h=768)  center / cover no-repeat;">
				<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					<div class="lc-block pt-5 mt-5 mb-4">
						<div editable="rich">
							<h2 class="display-6 lh-1 fw-bold">Assistenza 24H</h2>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo inventore recusandae ex nam eius unde voluptate magni</p>
						</div>
					</div>
					<ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a class="btn btn-link btn-sm text-white " href="#" role="button">Read more</a></ul>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background-image: url('https://images.unsplash.com/photo-1580133748682-099a97d17e6c?crop=entropy&amp;amp;cs=tinysrgb&amp;amp;fit=crop&amp;amp;fm=jpg&amp;amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTV8fGplbGx5JTIwZmlzaHxlbnwwfDB8fHwxNjIxNTA0MDU1&amp;amp;ixlib=rb-1.2.1&amp;amp;q=80&amp;amp;w=1080&amp;amp;h=768'); background-size:cover">
				<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					<div class="lc-block pt-5 mt-5 mb-4">
						<div editable="rich">
							<h2 class="display-6 lh-1 fw-bold">Annunci rapidi</h2>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odit exercitationem neque voluptatibus, ipsam labore ratione eaque. </p>
						</div>
					</div>
					<ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a class="btn btn-link btn-sm text-white " href="#" role="button">Read more</a></ul>
				</div>
			</div>
		</div>
	</div>
</div> --}}


{{-- <section class="container-fluid">
    <h1>Categorie</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-12 col-md-2 my-4">
            <div class="card shadow" style="width :12rem ;">
            <img src="https://picsum.photos/100" alt="Random img" class="cart-img-top p-3 rounded">
            <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item"><h3 class="fw-lighter">{{$category->name}}</h3></a>
            </div>
        </div>

        @endforeach
    </div>
</section> --}}





{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title text-center text-primary text-uppercase">Nostri Annunci</h6>
            <h1 class="mb-5">Explora i nostri  <span class="text-primary text-uppercase">Annunci</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($announcements as $announcement)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="https://picsum.photos/450/300" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prezzo: {{$announcement->price}}</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{$announcement->title}}</h5>
                        </div>

                        <p class="text-body mb-3">{{$announcement->body}}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>

                        </div>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div> --}}


<section class="pt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

         
          <h2 class="mb-4">Categorie piu viste</h2>

          
          <p class="mb-10 text-gray-500">
           Vieni alla Scoperta di tantissimi prodotti 
          </p>

        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-5 col-lg-4 d-flex flex-column">

          
          <div class="card mb-7 text-white" style="min-height: 400px; background-image: url(https://picsum.photos/600/600)">

            

        
            <div class="card-body my-auto text-center text-dark">

              
              <h4 class="mb-0 text-primary">INFORMATICA</h4>

             
              <a class="btn btn-link stretched-link text-reset" href="http://127.0.0.1:8000/categoria/1">
               Esplora Ora!
              </a>

            </div>

          </div>

        </div>
        <div class="col-12 col-md-7 col-lg-8 d-flex flex-column pt-4  ">

         
          <div class="card mb-7 text-body" style="min-height: 400px; " >

            <div class="card-body my-auto px-md-10 text-center text-md-start" style="background-image: url(https://picsum.photos/1000/600)">

              

             
              <h4 class="mb-0 text-primary">AUTO</h4>

              
              <a class="btn btn-link stretched-link px-0 text-reset" href="http://127.0.0.1:8000/categoria/4">
                Esplora Ora!
              </a>

            </div>

          </div>

        </div>

        <div class="col-12 col-md-7 col-lg-8 d-flex flex-column pt-4">

        
          <div class="card mb-7 mb-md-0 text-body" style="min-height: 400px; " >

           
            <div class="card-body my-auto px-md-10 text-center text-md-start" style="background-image: url(https://picsum.photos/1000/600)">

             
              <h4 class="mb-0 text-primary">CASA</h4>

             
              <a class="btn btn-link stretched-link px-0 text-reset" href="http://127.0.0.1:8000/categoria/3">
                Esplora Ora!
              </a>

            </div>

          </div>

        </div>
        <div class="col-12 col-md-5 col-lg-4 d-flex flex-column  pt-4">

         
          <div class="card text-white" style="min-height: 400px; ">


           
            <div class="card-body my-auto px-md-10 text-center text-md-start" style="min-height: 400px; background-image: url(https://picsum.photos/600/600)" >

              
              <h4 class="mb-0 text-primary">SALUTE</h4>

              <!-- Link -->
              <a class="btn btn-link stretched-link px-0 text-reset" href="http://127.0.0.1:8000/categoria/9">
                Esplora Ora!
              </a>

            </div>

          </div>

        </div>
      </div>
    </div>
</section>






<div class="container pt-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h6 class="section-title text-center text-primary text-uppercase">Nostri Annunci</h6>
        <h1 class="mb-5">Esplora i nostri  <span class="text-primary text-uppercase">Annunci</span></h1>
    </div>
    <div class="row g-4">
        @forelse ($announcements as $announcement)
        <div class="col-lg-12 col-12 " data-aos="fade-right" data-aos-duration="3000">
            
            <article class="postcard light yellow">
                <a class="postcard__img_link position-relative" href="#">
                    <img class="postcard__img " src="https://picsum.photos/501/501" alt="Image Title" />
                    <small class="position-absolute start-0 sss translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4  ">Prezzo: {{$announcement->price}}</small>
                </a>
                <div class="postcard__text t-dark">
                    <h5 class="mb-0">{{$announcement->title}}</h5>
                    <div class="postcard__subtitle small">
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                    </div>
                    <div class="postcard__bar"></div>
                    <p class="text-body mb-3 overflow-y-hidden">{{$announcement->body}}</p>   
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>
                        
                    </div>                     
                </div>
                
            </article>

        </div>
        @empty
        <h2>Non ci sono annunci nella Ricerca</h2>
        @endforelse
    </div>
</div>

<section class="py-5 py-md-5 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 text-center">

        
          <h2 class="mb-2">
            Newsletter
          </h2>

         
          <p class="mb-6">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam illo praesentium sequi in cum, beatae maiores quae qui.
          </p>

        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">

         
          
            <form action="" method="post">
              <div class="row justify-content-center gx-3">
                <div class="col">
                  <label class="visually-hidden" for="mce-EMAIL">Email Address </label>
                  <input class="form-control" type="email" value="" name="EMAIL">
                </div>
                <div class="col-auto">
                  <input class="btn btn-outline-primary" type="submit" value="Subscribe" name="subscribe" >
                </div>
              </div>
            </form>
          
        

        </div>
      </div>
    </div>
</section>

{{-- <div class="container-xxl py-5 ">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h6 class="section-title text-center text-primary text-uppercase">Nostri Annunci</h6>
        <h1 class="mb-5">Explora i nostri  <span class="text-primary text-uppercase">Annunci</span></h1>
    </div>
      
        
          <div class="row">
              @forelse ($announcements as $announcement)
            <div class="col-lg-12 col-12 shadow rounded my-5">
                <div class="row">
                  <div class="col-12 col-lg-4 col-sm-6">
                    <div class="position-relative">
                      <img src="https://picsum.photos/500/350" class="img-fluid rounded" alt="">
                  
                          <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prezzo: {{$announcement->price}}</small>
                      
                    </div>
                  </div>
                  <div class="col-12 col-lg-8 col-sm-6 ">
                    
                      <h4>{{$announcement->title}}</h4>
                      <span></span>
                      <div class="main-button">
                        <a href="about.html">Explore More</a>
                      </div>
                      <p class="overflow-y-hidden">{{$announcement->body}}</p>
                      
                      <div class="d-flex justify-content-between">
                          <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                          <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>
                          
                      </div>
                      <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                      
                    
                  </div>
                </div>
            </div>
            
            @empty
          <h2>Non ci sono annunci nella Ricerca</h2>
          @endforelse
           
          </div>
        
     

    
</div> --}}

    {{-- <section class="splide" id="second-slider" aria-label="Splide Basic HTML Example">
        <div class="splide__track">

            <div class="splide__list">
                @foreach ($announcements as $announcement)
                <div class="col-sm-4 splide__slide m-2">
                    <div class="card bg-dark text-white">
                        <div class="card-body card-body-bg-img" >
                            <h5 class="card-title">titolo</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quas, dolorem debitis.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section> --}}



