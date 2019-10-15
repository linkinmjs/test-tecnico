<div class="modal fade" id="categoryShow-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="categoryShow">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="categoryShow">{{ $category->id }} - {{ $category->name }}</h4>
            </div>
            <div class="modal-body">
            	<div class="row">
				 	<div class="col-md-9 col-md-push-3">
				 		<h4><span class="label label-default" style="background-color: {{ $category->color }}">{{ $category->color }}</span></h4>
				 	</div>
					<div class="col-md-3 col-md-pull-9">
					    @if(($category->is_active == 1))
			  				<h4><span class="label label-success">Categoria Activa</span></h4>
			  			@endif	
					</div>
				</div>
				<blockquote>
				  <p>Descripción</p>
				   <footer>{{ $category->description }}.</footer>
				</blockquote>
            </div>
            <div class="modal-footer">
              <b>Creado en:</b> {{ $category->created_at }}
			  <br>
			  <b>Última vez modificado:</b> {{ $category->updated_at }}				
            </div>
        </div>
    </div>
</div>