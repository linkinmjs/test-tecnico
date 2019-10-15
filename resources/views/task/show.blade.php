<div class="modal fade" id="taskShow-{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">{{ $task->id }} - {{ $task->title }}</h4>
            </div>
            <div class="modal-body">
				@if(!empty($task->category))
					<div class="content is-small">
						<p><b>Categoría:</b> {{ $task->category->name }}
							<i class="fas fa-circle" style="color: {{ $task->category->color }}"></i>
						</p>
					</div>
			  	@endif
				<blockquote>
				  <p>Descripción</p>
				   <footer>{{ $task->description }}.</footer>
				</blockquote>
			  	@if(($task->is_compleated == 1))
					<p>Tarea Completada
						<i class="fas fa-thumbs-up" style="color: {{ $task->category->color }}"></i>
					</p>
			  	@endif
            </div>
            <div class="modal-footer">
              <b>Creado en:</b> {{ $task->created_at }}
			  <br>
			  <b>Última vez modificado:</b> {{ $task->updated_at }}				
            </div>
        </div>
    </div>
</div>