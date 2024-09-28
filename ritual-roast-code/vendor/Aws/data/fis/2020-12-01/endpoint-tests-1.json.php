<?php
// This file was auto-generated from sdk-root/src/data/fis/2020-12-01/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'us-gov-west-1', ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'us-gov-west-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://fis.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseDualStack' => false, 'UseFIPS' => true, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseDualStack' => true, 'UseFIPS' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
