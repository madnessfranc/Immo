   <?php 
   function compareDates($then){
   	$then = new DateTime($then);
   	$now = new DateTime("now");
   	$interval = date_diff($then, $now);
   	$days = $interval->format('%R%a');
   	$hours = $interval->format('%R%h');
   	$minutes = $interval->format('%R%i');
   	$seconds = $interval->format('%R%s');
   	$days_val = intval(substr($days, 1, strlen($days)-1));
   	$hours_val = intval(substr($hours, 1, strlen($hours)-1));
   	$minutes_val = intval(substr($minutes, 1, strlen($minutes)-1));
   	$seconds_val = intval(substr($seconds, 1, strlen($seconds)-1));

   	if ($days_val == 0){
   		if ($hours_val == 0){
   			if ($minutes_val == 0){
   				if ($seconds_val == 0){
   					return "Just now";
   				}
   				else if ($seconds_val == 1){
   					return "1 second ago";
   				}
   				else
   					return $seconds_val." seconds ago";
   			}
   			else if ($minutes_val == 1){
   				return "1 minute ago";
   			}
   			else
   				return $minutes_val." minutes ago";
   		}
   		else if ($hours_val == 1){
   			return "1 hour ago";
   		}
   		else{
   			return $hours_val . " hours ago";
   		}
   	}
   	else if ($days_val > 0 && $days_val <= 29){
   		if ($days_val == 1){
   			return "1 day ago";
   		}
   		else
   			return $days_val." days ago";
   	}
   	else if ($days_val >= 30 && $days_val < 365) {
   		$compare = floor($days_val/30);
   		if ($compare == 1)
   			return "1 month ago";
   		else
   			return $compare." months ago";
   	}
   	else if ($days_val >= 365){
   		$compare = floor($days_val/365);
   		if ($compare == 1) {
   			return "1 year ago";
   		}
   		else
   			return $compare." years ago";
   	}
   }
   ?>