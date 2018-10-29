<?php
/**
 * MezaAdmin SpecialPage
 *
 * @file
 * @ingroup Extensions
 */

class SpecialMezaAdmin extends SpecialPage {
	public function __construct() {
		parent::__construct( 'MezaAdmin' );
	}

	public function execute( $par ) {
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();

		$output->addHTML('<h2>Maintenance Tasks</h2>');
		$output->addHTML("<p>Use the tools below to perform common maintenance tasks</p>");
		$output->addHTML("<h3>Clear Pending Reviews</h3>");
		$output->addHTML("<p>Use these drop downs to select the page category and time frame to clear pending reviews from.</p>");
		$output->addHTML("<h3>Run Jobs</h3>");
		$output->addHTML("<h3>Current Job Queue</h3>");
	}

	protected function getGroupName() {
		return 'other';
	}
}
