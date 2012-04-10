<?php
/**
 * Class that builds our Entries detail page
 * 
 * @since 1.4
 */
class VisualFormBuilder_Entries_Detail{
	public function __construct(){
		global $wpdb;
		
		/* Setup global database table names */
		$this->field_table_name = $wpdb->prefix . 'visual_form_builder_fields';
		$this->form_table_name = $wpdb->prefix . 'visual_form_builder_forms';
		$this->entries_table_name = $wpdb->prefix . 'visual_form_builder_entries';
		
		add_action( 'admin_init', array( &$this, 'entries_detail' ) );
	}
	
	public function entries_detail(){
		global $wpdb;
		
		$entry_id = absint( $_REQUEST['entry'] );
		
		$query = "SELECT forms.form_title, entries.* FROM $this->form_table_name AS forms INNER JOIN $this->entries_table_name AS entries ON entries.form_id = forms.form_id WHERE entries.entries_id  = $entry_id;";
		
		$entries = $wpdb->get_results( $query );
		
		echo '<p>' . sprintf( '<a href="?page=%s&view=%s" class="view-entry">&laquo; Back to Entries</a>', $_REQUEST['page'], $_REQUEST['view'] ) . '</p>';
		
		/* Get the date/time format that is saved in the options table */
		$date_format = get_option('date_format');
		$time_format = get_option('time_format');
		
		/* Loop trough the entries and setup the data to be displayed for each row */
		foreach ( $entries as $entry ) {
			$data = unserialize( $entry->data );
?>
<h3><span><?php echo stripslashes( $entry->form_title ); ?> : <?php echo __( 'Entry' , 'visual-form-builder'); ?> # <?php echo $entry->entries_id; ?></span></h3>
            <div id="poststuff" class="metabox-holder has-right-sidebar">
				<div id="side-info-column" class="inner-sidebar">
					<div id="side-sortables">
						<div id="submitdiv" class="postbox">
							<h3><span><?php echo __( 'Details' , 'visual-form-builder'); ?></span></h3>
							<div class="inside">
							<div id="submitbox" class="submitbox">
								<div id="minor-publishing">
									<div id="misc-publishing-actions">
										<div class="misc-pub-section">
											<span><strong><?php echo  __( 'Form Title' , 'visual-form-builder'); ?>: </strong><?php echo stripslashes( $entry->form_title ); ?></span>
										</div>
										<div class="misc-pub-section">
											<span><strong><?php echo  __( 'Date Submitted' , 'visual-form-builder'); ?>: </strong><?php echo date( "$date_format $time_format", strtotime( $entry->date_submitted ) ); ?></span>
										</div>
										<div class="misc-pub-section">
											<span><strong><?php echo __( 'IP Address' , 'visual-form-builder'); ?>: </strong><?php echo $entry->ip_address; ?></span>
										</div>
										<div class="misc-pub-section">
											<span><strong><?php echo __( 'Email Subject' , 'visual-form-builder'); ?>: </strong><?php echo stripslashes( $entry->subject ); ?></span>
										</div>
										<div class="misc-pub-section">
											<span><strong><?php echo __( 'Sender Name' , 'visual-form-builder'); ?>: </strong><?php echo stripslashes( $entry->sender_name ); ?></span>
										</div>
										<div class="misc-pub-section">
											<span><strong><?php echo __( 'Sender Email' , 'visual-form-builder'); ?>: </strong><a href="mailto:<?php echo stripslashes( $entry->sender_email ); ?>"><?php echo stripslashes( $entry->sender_email ); ?></a></span>
										</div>
										<div class="misc-pub-section misc-pub-section-last">
											<span><strong><?php echo __( 'Emailed To' , 'visual-form-builder'); ?>: </strong><?php echo preg_replace('/\b([A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4})\b/i', '<a href="mailto:$1">$1</a>', implode( ',', unserialize( stripslashes( $entry->emails_to ) ) ) ); ?></span>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								
								<div id="major-publishing-actions">
									<div id="delete-action"><?php echo sprintf( '<a class="submitdelete deletion entry-delete" href="?page=%s&view=%s&action=%s&entry=%s">Delete</a>', $_REQUEST['page'], $_REQUEST['view'], 'delete', $entry_id ); ?></div>
									<div class="clear"></div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			<div>
				<div id="post-body-content">
        <?php
        	$count = 0;
			$open_fieldset = $open_section = false;
			
			foreach ( $data as $k => $v ) {
				if ( !is_array( $v ) ) {
					if ( $count == 0 ) {
						echo '<div class="postbox">
							<h3><span>' . $entry->form_title . ' : ' . __( 'Entry' , 'visual-form-builder') .' #' . $entry->entries_id . '</span></h3>
							<div class="inside">';
					}
					
					echo '<h4>' . ucwords( $k ) . '</h4>';
					echo $v;
					//echo '</div></div>';
					$count++;
				}
				else {
					/* Cast each array as an object */
					$obj = (object) $v;

					/* Close each section */
					if ( $open_section == true ) {
						/* If this field's parent does NOT equal our section ID */
						if ( $sec_id && $sec_id !== $obj->parent_id ) {
							echo '</div>';
							$open_section = false;
						}
					}
					
					if ( $obj->type == 'fieldset' ) {
						/* Close each fieldset */
						if ( $open_fieldset == true )
							echo '</div>';
						
						echo '<div class="vfb-details"><h2>' . $obj->name . '</h2>';
					
						$open_fieldset = true;
					}
					elseif ( $obj->type == 'section' ) {
						/* Close each fieldset */
						if ( $open_section == true )
							echo '</div>';
						
						echo '<div class="vfb-details section"><h3 class="section-heading">' . $obj->name . '</h3>';
						
						/* Save section ID for future comparison */
						$sec_id = $obj->id;
						$open_section = true;
					}
					
					switch ( $obj->type ) {
						case 'fieldset' :
						case 'section' :
						case 'submit' :
						break;
						
						default :
							echo '<div class="postbox">
								<h3><span>' . $obj->name . '</span></h3>
								<div class="inside">' .
								$obj->value .
								'</div></div>';
						break;
					}
				}
			}
			
			if ( $count > 0 )
				echo '</div></div>';
		
			echo '</div></div></div></div>';
		}
		
		echo '<br class="clear"></div>';
	}
}
?>