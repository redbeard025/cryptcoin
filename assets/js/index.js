let googlePayClient;
function onGooglePayLoaded() {
  googlePayClient = new google.payments.api.PaymentsClient({
    environment: 'TEST'
  });
}

const baseCardPaymentMethod = {
    type: 'CARD',
    parameters: {
      allowedCardNetworks: ['VISA','MASTERCARD'],
      allowedAuthMethods: ['PAN_ONLY','CRYPTOGRAM_3DS']
    }
  };
  
  const googlePayBaseConfiguration = {
    apiVersion: 2,
    apiVersionMinor: 0,
    allowedPaymentMethods: [baseCardPaymentMethod]
  };

  function createAndAddButton() {

    const googlePayButton = googlePayClient.createButton({
  
      // currently defaults to black if default or omitted
      buttonColor: 'default',
  
      // defaults to long if omitted
      buttonType: 'long',
  
      onClick: onGooglePaymentsButtonClicked
    });
  
    document.getElementById('buy-now').appendChild(googlePayButton);
  }
  
  function onGooglePaymentsButtonClicked() {
    // TODO: Perform transaction
  }

  const tokenizationSpecification = {
    type: 'PAYMENT_GATEWAY',
    parameters: {
      gateway: 'example',
      gatewayMerchantId: 'gatewayMerchantId'
    }
  };