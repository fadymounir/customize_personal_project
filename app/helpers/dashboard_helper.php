<?php

/**
 * @param $viewSegment
 * @return string
 *  to get view Path
 */
function getFullPathSegmentDashboard($viewSegment): string
{
   return 'admin.subviews.' . $viewSegment.".";
}


