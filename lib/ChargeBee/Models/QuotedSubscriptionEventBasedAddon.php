<?php

class ChargeBee_QuotedSubscriptionEventBasedAddon extends ChargeBee_Model
{
  protected $allowed = array('id', 'quantity', 'unit_price', 'service_period_in_days', 'on_event', 'charge_once');

}

?>