<?php

// If you choose to use ENV vars to define these values, give this IdP its own env var names
// so you can define different values for each IdP, all starting with 'SAML2_'.$this_idp_env_id
$this_idp_env_id = 'SSO';

//This is variable is for simplesaml example only.
// For real IdP, you must set the url values in the 'idp' config to conform to the IdP's real urls.
$idp_host = env('SAML2_'.$this_idp_env_id.'_IDP_HOST', 'http://localhost:8000/simplesaml');

return $settings = array(

    /*****
     * One Login Settings
     */

    // If 'strict' is True, then the PHP Toolkit will reject unsigned
    // or unencrypted messages if it expects them signed or encrypted
    // Also will reject the messages if not strictly follow the SAML
    // standard: Destination, NameId, Conditions ... are validated too.
    'strict' => true, //@todo: make this depend on laravel config

    // Enable debug mode (to print errors)
    'debug' => env('APP_DEBUG', false),

    // Service Provider Data that we are deploying
    'sp' => array(

        // Specifies constraints on the name identifier to be used to
        // represent the requested subject.
        // Take a look on lib/Saml2/Constants.php to see the NameIdFormat supported
        'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',

        // Usually x509cert and privateKey of the SP are provided by files placed at
        // the certs folder. But we can also provide them with the following parameters
        'x509cert' => 'MIIEQjCCAyqgAwIBAgIJAIVlfRDBPqJ7MA0GCSqGSIb3DQEBBQUAMHMxCzAJBgNVBAYTAnBzMQ0wCwYDVQQIEwRnYXphMQ0wCwYDVQQHEwRnYXphMQwwCgYDVQQKEwNnY2MxDDAKBgNVBAsTA2djYzEMMAoGA1UEAxMDc3NvMRwwGgYJKoZIhvcNAQkBFg1zZGFkYWhAZ292LnBzMB4XDTEyMDIwNTA3MjkxMloXDTIyMDIwNDA3MjkxMlowczELMAkGA1UEBhMCcHMxDTALBgNVBAgTBGdhemExDTALBgNVBAcTBGdhemExDDAKBgNVBAoTA2djYzEMMAoGA1UECxMDZ2NjMQwwCgYDVQQDEwNzc28xHDAaBgkqhkiG9w0BCQEWDXNkYWRhaEBnb3YucHMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDDmfrkiMFe1uvVxrFlHYDaFREoYnf+vdpbuTVZFt73GEKiKEuQWO0FjxFy+duh40XmvpNc665hNhgqxkXiRD832DhkJivqG6IpBXRamoN0jJWaUwG2NPoLaRduBs8Cfs/HIlk+c52qv8vp8rk+Nn1a7vWj3txrMGxa1HZgeZaAbUzWn2p1d0YOZmPWpNWIj8rZdfHnmbZ20uLtjfJbcyJhhRyRas3PTijDSSRXkvJ+s9OkIHigvgpwj4EzC2tk+2plG3fleN3B+rjXQTE2ggrPFsZ9EAT73x29CwKLmPttkrSiLHzFSZq+AVYJ6EfTO252dy8M5v9jmIv/XI9HamdbAgMBAAGjgdgwgdUwHQYDVR0OBBYEFHHwu7mLmRl+dD2EQZRa3uC6YKdOMIGlBgNVHSMEgZ0wgZqAFHHwu7mLmRl+dD2EQZRa3uC6YKdOoXekdTBzMQswCQYDVQQGEwJwczENMAsGA1UECBMEZ2F6YTENMAsGA1UEBxMEZ2F6YTEMMAoGA1UEChMDZ2NjMQwwCgYDVQQLEwNnY2MxDDAKBgNVBAMTA3NzbzEcMBoGCSqGSIb3DQEJARYNc2RhZGFoQGdvdi5wc4IJAIVlfRDBPqJ7MAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBABehrOcCaXbekP4HS0mmMNS9mqnoJT0kKZlQnN3DpkiBpiXZr+ehg78rzdzcsM2mEGZdU5wCOolPfZkKWag/kwhz6HJg/9s4tc3czEoar669TzUNVxFew2DCXTvq6/zZVJ4DRjGX7+KCI8Xt0s98tQNs9YNrst/ocXtccvTUZKsG8B03MjKNvJq8oYAsOs5ee+Iir/jIvZGiQF9M8EbDfeO+B5TcvTB8zLjR88j4WXdjjohxvvpW6lS4vvvpPpEoWM9ed51+b00Ae42B5Fd7oJo/0CLD2SbDrsvVfBXAHH0a2IFPEuhg9bSWSpZOFB2CqFdOktgn/aPrJ9Ko5yg6DMw=',
        'privateKey' => 'MIIEpQIBAAKCAQEAw5n65IjBXtbr1caxZR2A2hURKGJ3/r3aW7k1WRbe9xhCoihLkFjtBY8RcvnboeNF5r6TXOuuYTYYKsZF4kQ/N9g4ZCYr6huiKQV0WpqDdIyVmlMBtjT6C2kXbgbPAn7PxyJZPnOdqr/L6fK5PjZ9Wu71o97cazBsWtR2YHmWgG1M1p9qdXdGDmZj1qTViI/K2XXx55m2dtLi7Y3yW3MiYYUckWrNz04ow0kkV5LyfrPTpCB4oL4KcI+BMwtrZPtqZRt35Xjdwfq410ExNoIKzxbGfRAE+98dvQsCi5j7bZK0oix8xUmavgFWCehH0ztudncvDOb/Y5iL/1yPR2pnWwIDAQABAoIBAB8EE5yZctAvFEZZs1dtTjlGjenxc0WZpT5WJ/dwgPp9hlNgQFsrPqpa/VFV/VW2TCdCoOtjE8umYD6oIfy3Ba89QfPfeactqpEGpGSZi663fCF0eBkEXYHhsC1qNvkWUqwo7i3Q93dT4mm+a1FKIqaArcLGW/1DOGtOtVam8Q57/2IBlpoC3ZEPO8/yrT0zAykBSN+nFrxMC+4XcdgRRV0K/b+9LpQlq0rLJPFbd0MWK1B8gZp3sFK8OEz2aTFo+PeuBhhVgkgxLs8PNVjnqwHUi0MCRoFDOgdjzHXFu9UzW2XI0dBdTON+BiEm5KPU4jGG9xV/ITv+uHqGSfTeeYECgYEA6dsxDFOy1jn2ngDqokBxrzdqZtXAmhdXt95h01qrd5vf/BqcIltKQ+aMYpTovv1PXIfGAfL2QcFDeN2vVMwLGQ+445NhFSDhtYmE0KblKjX8RFGHL4yr5gO0VRweK2XjPVlYkB0O30OH57LgdoTpafAGw/Z0vlPvzLjV/yRiYAkCgYEA1h94zDU92GE6DGhjXBRH4QC6f9A5IDsmnhkj2HZbVtwaUUV3aDfNg+Pe23dfTCzpIsvBFogbeM9O6fRuQ7tfmzhwoGH3mJmGBRJEpPFvdCuKhL43/u4S0PvOZ29s+lQrm7cV
9FBbHsjWm32Ij89d5AwG9+LbU4JblK07XgCIXUMCgYEAlBINhFiaq7oXxQOfjQxw7xiPbn15bhfJmspb9o86coln0SCoK7jR1RxtVx4iIIwTa+ssHJ/R/OB58FWtZmuruzqRPsdaeR5Qy7k/Nz31bDyydi+JATp4vTMrQ5iCIchpkba4tMcxW3xO2Q4Rwfl2MXWhUwMB+GD9PQrrtJk9EMECgYEAkQSrqZJ9mmjvCaxBbwGFVQxLQ3lg10V4eCcKsfYnEoLriBOGNZ1loWfZbcZBUrQwCZL56SqxgHbXOXiEnXbv346wKM9xA3cm35RpzVR/aax7mj/CaPQQ5l1Eg6Vhp4EOL94mDlvF+umG/7RboxqMuoCyz3xjkwF8yQsyZA30TUUCgYEA54lqm1UuujhRT7uCbSQh1/kDKDk1/SQCosg3kTkClZwfveUmPUrD///1CJqGZVawBHOiQPfCD3AOBy83Dd8D9UdOoIMLjbxkMW75EyBfwWqmcvW+6BZaBmvD7ar71DdJLPmxw050SISndj3dTUv2PWiciE//bndLMd2+Ao+gFhg=',

        // Identifier (URI) of the SP entity.
        // Leave blank to use the '{idpName}_metadata' route, e.g. 'test_metadata'.
        'entityId' => env('SAML2_'.$this_idp_env_id.'_SP_ENTITYID',''),

        // Specifies info about where and how the <AuthnResponse> message MUST be
        // returned to the requester, in this case our SP.
        'assertionConsumerService' => array(
            // URL Location where the <Response> from the IdP will be returned,
            // using HTTP-POST binding.
            // Leave blank to use the '{idpName}_acs' route, e.g. 'test_acs'
            'url' => '',
        ),
        // Specifies info about where and how the <Logout Response> message MUST be
        // returned to the requester, in this case our SP.
        // Remove this part to not include any URL Location in the metadata.
        'singleLogoutService' => array(
            // URL Location where the <Response> from the IdP will be returned,
            // using HTTP-Redirect binding.
            // Leave blank to use the '{idpName}_sls' route, e.g. 'test_sls'
            'url' => '',
        ),
    ),

    // Identity Provider Data that we want connect with our SP
    'idp' => array(
        // Identifier of the IdP entity  (must be a URI)
        'entityId' => 'https://ssoidp.gov.ps/sso/saml2/idp/metadata.php',
        // SSO endpoint info of the IdP. (Authentication Request protocol)
        'singleSignOnService' => array(
            // URL Target of the IdP where the SP will send the Authentication Request Message,
            // using HTTP-Redirect binding.
            'url' => 'https://ssoidp.gov.ps/sso/saml2/idp/SSOService.php',
        ),
        // SLO endpoint info of the IdP.
        'singleLogoutService' => array(
            // URL Location of the IdP where the SP will send the SLO Request,
            // using HTTP-Redirect binding.
            'url' => 'https://ssoidp.gov.ps/sso/saml2/idp/SingleLogoutService.php',
        ),
        // Public x509 certificate of the IdP
        'x509cert' => 'MIIEPzCCAyegAwIBAgIJAIJxFAvkIoxeMA0GCSqGSIb3DQEBBQUAMHIxCzAJBgNVBAYTAnBzMQ0wCwYDVQQIEwRHYXphMQ0wCwYDVQQHEwRHYXphMQ0wCwYDVQQKEwRNVElUMQswCQYDVQQLEwJJVDENMAsGA1UEAxMEbXRpdDEaMBgGCSqGSIb3DQEJARYLbXRpdEBnb3YucHMwHhcNMTIwNDI5MDgwMjIwWhcNMjIwNDI5MDgwMjIwWjByMQswCQYDVQQGEwJwczENMAsGA1UECBMER2F6YTENMAsGA1UEBxMER2F6YTENMAsGA1UEChMETVRJVDELMAkGA1UECxMCSVQxDTALBgNVBAMTBG10aXQxGjAYBgkqhkiG9w0BCQEWC210aXRAZ292LnBzMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsJmgJb/Y5sj4pXvDaUEMa6gMdPThVmn5yU7AFBxq4h920qByqhQJuFCrc9KheRADEZrcy2OkYrIoF4M03OAoqandhxWzAkEgq+gdmnNybxJcZjZDOEpW8gDxf672GCY4DUpRl7JmVzbIoY29mpK4dnf4h+8ojUZizmSu/F/Cz3EBDRDBjgqcU8bpV+SnkWQ71Z8/Z5djwqbNkaHXFzrQy5qI6t65yPpyGEyU6RoUIbeB3Ui1eumlyoBOu6Nn+/Nv90JX53QSqcxvnHoEHTqY3yLhIfdxnLrumUkmRWowmMbnSgrhxtrL1m3U93A/NrRjgDTCUoR2oxBYgbwMq5RVeQIDAQABo4HXMIHUMB0GA1UdDgQWBBSR9AfAWj+hBHiD68FoCArKOSi9kzCBpAYDVR0jBIGcMIGZgBSR9AfAWj+hBHiD68FoCArKOSi9k6F2pHQwcjELMAkGA1UEBhMCcHMxDTALBgNVBAgTBEdhemExDTALBgNVBAcTBEdhemExDTALBgNVBAoTBE1USVQxCzAJBgNVBAsTAklUMQ0wCwYDVQQDEwRtdGl0MRowGAYJKoZIhvcNAQkBFgttdGl0QGdvdi5wc4IJAIJxFAvkIoxeMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAIx1VwIRLk7Tj68xnVJpDAulAgdjduY5GylfMnPFSCMug6Oh16vCiMXFGldOzAZORI99KrcSe/UdlJyzu/OY3TzZgc/CSFmIgpkEB9OdahRH1qirH5ZbCqzw6ukxnjnWGxc7zCVZ3a2ZGK3PpJewhZmtjBcCaof3zfFvL+uislWZ5mO73wC8s2upJckQbB3eUXdO3N1EMgS1tQbZ85wwtnbFsEJCgKK9nGWHCO6pSmwFo80LzhTosg2htechCfSStMPLpMAiPRpyprV6g7PzRKl6lpghHJOS/XMMxmQbwMufy2JSRSMYFVeHx8RglCIIXPe4ucHvun3JZDqxwUO5pKo=',
        /*
         *  Instead of use the whole x509cert you can use a fingerprint
         *  (openssl x509 -noout -fingerprint -in "idp.crt" to generate it)
         */
        // 'certFingerprint' => '',
    ),



    /***
     *
     *  OneLogin advanced settings
     *
     *
     */
    // Security settings
    'security' => array(

        /** signatures and encryptions offered */

        // Indicates that the nameID of the <samlp:logoutRequest> sent by this SP
        // will be encrypted.
        'nameIdEncrypted' => false,

        // Indicates whether the <samlp:AuthnRequest> messages sent by this SP
        // will be signed.              [The Metadata of the SP will offer this info]
        'authnRequestsSigned' => false,

        // Indicates whether the <samlp:logoutRequest> messages sent by this SP
        // will be signed.
        'logoutRequestSigned' => false,

        // Indicates whether the <samlp:logoutResponse> messages sent by this SP
        // will be signed.
        'logoutResponseSigned' => false,

        /* Sign the Metadata
         False || True (use sp certs) || array (
                                                    keyFileName => 'metadata.key',
                                                    certFileName => 'metadata.crt'
                                                )
        */
        'signMetadata' => false,


        /** signatures and encryptions required **/

        // Indicates a requirement for the <samlp:Response>, <samlp:LogoutRequest> and
        // <samlp:LogoutResponse> elements received by this SP to be signed.
        'wantMessagesSigned' => false,

        // Indicates a requirement for the <saml:Assertion> elements received by
        // this SP to be signed.        [The Metadata of the SP will offer this info]
        'wantAssertionsSigned' => false,

        // Indicates a requirement for the NameID received by
        // this SP to be encrypted.
        'wantNameIdEncrypted' => false,

        // Authentication context.
        // Set to false and no AuthContext will be sent in the AuthNRequest,
        // Set true or don't present thi parameter and you will get an AuthContext 'exact' 'urn:oasis:names:tc:SAML:2.0:ac:classes:PasswordProtectedTransport'
        // Set an array with the possible auth context values: array ('urn:oasis:names:tc:SAML:2.0:ac:classes:Password', 'urn:oasis:names:tc:SAML:2.0:ac:classes:X509'),
        'requestedAuthnContext' => true,
    ),

    // Contact information template, it is recommended to suply a technical and support contacts
    'contactPerson' => array(
        'technical' => array(
            'givenName' => 'name',
            'emailAddress' => 'no@reply.com'
        ),
        'support' => array(
            'givenName' => 'Support',
            'emailAddress' => 'no@reply.com'
        ),
    ),

    // Organization information template, the info in en_US lang is recomended, add more if required
    'organization' => array(
        'en-US' => array(
            'name' => 'Name',
            'displayname' => 'Display Name',
            'url' => 'http://url'
        ),
    ),

/* Interoperable SAML 2.0 Web Browser SSO Profile [saml2int]   http://saml2int.org/profile/current

   'authnRequestsSigned' => false,    // SP SHOULD NOT sign the <samlp:AuthnRequest>,
                                      // MUST NOT assume that the IdP validates the sign
   'wantAssertionsSigned' => true,
   'wantAssertionsEncrypted' => true, // MUST be enabled if SSL/HTTPs is disabled
   'wantNameIdEncrypted' => false,
*/

);
