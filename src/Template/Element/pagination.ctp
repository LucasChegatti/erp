<center>
<div class="paginator">
	<div class="pagination">
		<?php
		echo $this->paginator->prev('< Anterior');
		echo $this->paginator->numbers();
		echo $this->paginator->next('Proxima >');
		?>
	</div>
</div>
<?php echo $this->paginator->counter(); ?>
</center>
