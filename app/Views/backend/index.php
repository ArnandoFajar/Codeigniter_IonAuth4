<?= $this->extend('backend/layouts/template') ?>

<?= $this->section('content') ?>

<?php if (session()->getFlashdata('message_akses')) : ?>
	<div class="alert alert-warning alert-dismissible fade show text-center " role="alert">
		<strong>Restricted</strong> <?= session()->getFlashdata('message_akses'); ?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>
<?php if (session()->getFlashdata('message')) : ?>
	<div class="alert alert-info alert-dismissible fade show text-center" role="alert">
		<?= session()->getFlashdata('message'); ?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>

<h1><?php echo lang('Auth.index_heading'); ?></h1>
<p><?php echo lang('Auth.index_subheading'); ?></p>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('Auth.index_fname_th'); ?></th>
		<th><?php echo lang('Auth.index_lname_th'); ?></th>
		<th><?php echo lang('Auth.index_email_th'); ?></th>
		<th><?php echo lang('Auth.index_groups_th'); ?></th>
		<th><?php echo lang('Auth.index_status_th'); ?></th>
		<th><?php echo lang('Auth.index_action_th'); ?></th>
	</tr>
	<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
			<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
			<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
			<td>
				<?php foreach ($user->groups as $group) : ?>
					<?php echo anchor('auth/edit_group/' . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
				<?php endforeach ?>
			</td>
			<td><?php echo ($user->active) ? anchor('auth/deactivate/' . $user->id, lang('Auth.index_active_link')) : anchor("auth/activate/" . $user->id, lang('Auth.index_inactive_link')); ?></td>
			<td>
				<?php echo anchor('auth/edit_user/' . $user->id, lang('Auth.index_edit_link')); ?>
				<a href="<?= base_url('auth/delete_user/'.$user->id); ?>">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>

<p><?php echo anchor('auth/create_user', lang('Auth.index_create_user_link')) ?> | <?php echo anchor('auth/create_group', lang('Auth.index_create_group_link')) ?></p>
<?= $this->endSection() ?>