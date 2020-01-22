String SSID,PASSWORD;
//const char* SSID = ""; 
//const char* PASSWORD = ""; 

void setup() {
  Serial.begin(9600);
}

void loop() {
  if((SSID=="")||(PASSWORD=="")){
    if(SSID==""){
      do{
        delay(1000);
        Serial.println("Digite o SSID: ");
        SSID=getResultadoSerial();
      }while(SSID=="");
    }
    Serial.print("Digite o SSID: ");
    Serial.println(SSID);
    if(PASSWORD==""){
      do{
        delay(1000);
        Serial.println("Digite o PASSWORD: ");
        PASSWORD=getResultadoSerial();
      }while(PASSWORD=="");
    }
  }else{
    
    }
  delay(1000);
}
String getResultadoSerial(){
  
  String sms="";
  if(Serial.available()>0){
    do{
      char caracterio = Serial.read();
      sms+= caracterio;
    }while(Serial.available()>0);
  }
  return sms;
}
