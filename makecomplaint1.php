<div class="" id="makecomplaint" style="width:100%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>Make a complaint<hr /></h4>
				<form class="form" action="dataUserComplaint.php" method="POST" style="width:100%;">
					<span id="span2">Detail:</span>
					<select id="comCategory" name="comCategory" style="width:30%;border-radius:12px;height:37px;"required> 
						<option>Other</option>
						<option>Refund</option>
						<option>Reschedule</option>
					</select>
					<span id="span2" style="margin-left:20px;">Email:</span>
					<input type="text" name="email" style="width:30%;border-radius:5px;height:37px; border:.8px solid aqua;" placeholder="Please Enter a Email..."required>
					<br /><br />
					<span id="span2">Full Name:</span><input type="text" name="fullname" class="form-control in2" placeholder="Please Enter you fullname..."required><br />
					<span id="span">Complaint:</span>
					<textarea name="comDescription" class="form-control in1" placeholder="Feel free to write. Your complaint is secure." style="height:200px;"required></textarea><br />
					
					<input type="submit"  class="btn btn-success" name="btn-success" style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="Send"><br />
				</form>
			</div>