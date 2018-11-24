        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

            </div>
        		<!-- /.box-header -->
        		<?=  form_open('kontak/hapusdata'); ?>
        		<div class="box-body">
        		  <div class="mailbox-controls">
 
        		  <div class="table-responsive mailbox-messages">
        				<table class="table table-hover table-striped table-bordered" id="example2" >
        					<thead>
        						<tr>
        							<th><input type="checkbox" id="checkAll"></th>
        							<th>Nama</th>
        							<th>Pesan</th>
        							<th>Tanggal</th>
        							<th>Status</th>
        						</tr>
        					</thead>
        					<tbody>
        						<?php foreach ($kontak as $row): ?>
        							
        						<tr>
        							<td width="5%"><input type="checkbox" name="id[]" class="checkbox" value="<?= $row['id'] ?>"></td>
        							<td width="15%" class="mailbox-name"><a href="<?= base_url('kontak/lihatdata/'.$row['id']) ?>"><?= $row['nama'] ?></a></td>
        							<td width="40%" class="mailbox-subject"><b><?= $row['subjek'] ?></b> - <?= substr($row['pesan'], 0, 50) ?> ...
        							</td>
        							<td class="mailbox-date"><?= tanggal_indo($row['tanggal']) ?></td>
        							<td><?php if ($row['balasan'] != null): ?>
        								<span class="badge bg-green">Sudah dibalas</span>
        								<?php else: ?>
        									<span class="badge bg-yellow">Belum dibalas</span>
        							<?php endif ?>

        							</td>
        						</tr>
        						<?php endforeach ?>
        					</tbody>
        				</table>
        				<button type="submit" class="btn btn-danger">Hapus</button>
        				<!-- /.table -->
        			</div>
        			<!-- /.mail-box-messages -->
        		</div>
        		<!-- /.box-body -->
        		<div class="box-footer no-padding">
        			<div class="mailbox-controls">
        				<!-- Check all button -->
        				

        			</div>
        		</div>
        	</div>
        	<!-- /. box -->
        </div>
        <!-- /.col -->