    <div class="container-fluid video" id="scroll-video">
             
             <div class="container vid-zag">
                    <h1 class="into-h1"><span class="big">{{Lang::get('app.video')}}</span><span class="zagolovok">{{Lang::get('app.video')}}</span></h1>
                </div>   
            <div id="responsive-example-container">
            <div class="">

        @foreach( $locale -> videogroups -> chunk( 2 ) as $key => $groups )

          <div class="kw-block kwicks kwicks-horizontal kwicks-processed">

            @foreach( $groups as $k => $group)

            
            <div class="video-block col-md-3 {{$group -> slug}}">
                

                    <div class="title">{{$group -> title}}</div>
         
                        <div class="block-on-hover"> 
                    
                            <a href="{{asset('video/' . $group -> slug )}}">
                            
                                <h2>{{$group -> title}}</h2> 

                            </a>
                        
                        <p>{!! htmlspecialchars_decode( $group -> description ) !!}</p>   
                    
                    </div>

        

            </div>


            @endforeach

            </div>

        @endforeach

   
            </div>
            </div>
        

        </div>