<div class="row">

    <div class="span10 offset1">
		<?= $this->draw('admin/menu') ?>
        <h1>Embedly Cards</h1>

        <div class="explanation clearfix">
            <p>
				Embedly Cards uses the <a href="http://embed.ly/cards">Embedly Cards</a> service to dynamically embed nice looking previews of links.
				All bookmarks will be appended with the Embedly Card view.  Additionally any links with the class 'embedly-card' in any content type can be
				rendered as a card.
				<br><br>
				eg. <a href="https://withknown.com">Withknown</a> becomes:
            </p>
			<div class="pull-left">
				<a href="https://withknown.com" class="embedly-card">Withknown</a>
			</div>
        </div>
    </div>

</div>
<div class="span10 offset1">
<form action="/admin/embedlycards/" class="form-horizontal" method="post">
	<div class="row">
		<div class="span10">
			<h2>Embedly Card Settings</h2>
		</div>
	</div>
	<div class="row">
		<div class="span2">
			<p><label class="control-label" for="embedlycards_preferdefault"><strong>Prefer Default Embed</strong></label></p>
		</div>
		<div class="config-toggle span4">
			<input type="checkbox" data-toggle="toggle" data-onstyle="info" data-on="Yes" data-off="No"
				   name="embedlycards_preferdefault"
				   value="true" <?php if (\Idno\Core\site()->config()->embedlycards_preferdefault == true) echo 'checked'; ?>>
		</div>
		<div class="span4">
			<p class="config-desc">Known has a default embedder that can handle youtube/vimeo/images.  You can choose to use the default embedder and fall back to Embedly Cards for unrecognized links.</p>
		</div>
	</div>

	<div class="row">
		<div class="span10">

			<button type="submit" class="btn btn-primary code">Save code</button>

		</div>
	</div>
	<?= \Idno\Core\site()->actions()->signForm('/admin/embedlycards/') ?>
</form>
</div>