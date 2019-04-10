<?php

/**
 * Accordions help you organize fields into panels that open and close.
 * All fields following this accordion (or until another accordion is defined) will be grouped together.
 * 
 * @version 2.0.0
 * @package sacf\fields
 */

namespace sacf\field;

class accordion extends base {

	/**
	 * defaults
	 *
	 * @var array
	 */
	protected $defaults = array(
		'open' => 0,
		'multi_expand' => 0,
		'endpoint' => 0,
	);

	/**
	 * Constructor method
	 * 
	 * @param String $label Label for this field
	 * @param String $name Alternative name for this field (optional - autogenerated from Label if left out)
	 */
	public function __construct($label, $name = '') {
		parent::__construct($label, $name, 'accordion');
	}

	/**
	 * Display this accordion as open on page load.
	 *
	 * @param boolean $bool is open on page load 
	 * @return void
	 */
	public function open($bool = true) {
		$this->options['open'] = $bool;
		return $this;
	}

	/**
	 * Allow this accordion to open without closing others.
	 *
	 * @param boolean $bool can be open while others are
	 * @return void
	 */
	public function multi_expand($bool = true) {
		$this->options['multi_expand'] = $bool;
		return $this;
	}

	/**
	 * Define an endpoint for the previous accordion to stop. This accordion will not be visible.
	 *
	 * @param boolean $bool is there an endpoint
	 * @return void
	 */
	public function endpoint($bool = true) {
		$this->options['endpoint'] = $bool;
		return $this;
	}
}
