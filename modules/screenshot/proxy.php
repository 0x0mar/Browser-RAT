https://github.com/niklasvh/html2canvas-proxy/blob/master/python/html2canvas.py

gets 
  url 
  callback 
    != empty
    
make sure == valid url(get client side-- curent page)
  
  
def get(self):
        if self.request.get('url') != "" and self.request.get('callback') != "":
            try:

                url = self.request.get('url');

                urlInfo = urlparse.urlparse(url);

                if urlInfo.scheme in ["http","https"]:
                    result = urllib2.urlopen(url)
                    requestInfo = result.info();

                    if requestInfo['content-type'] in ["image/jpeg","image/png","image/gif"] or "image/png" in requestInfo['content-type'] or "image/jpg" in requestInfo['content-type'] or "image/jpeg" in requestInfo['content-type'] or "image/gif" in requestInfo['content-type'] or "text/html" in requestInfo['content-type'] or "application/xhtml" in requestInfo['content-type']:
                        if self.request.get('xhr2') == "true":
                            self.response.headers.add_header("Access-Control-Allow-Origin", "*");
                            self.response.headers['Content-Type'] = requestInfo['content-type'];
                            self.response.out.write(result.read());
                        else:
                            self.response.headers['Content-Type'] = "application/javascript";
                            if "text/html" in requestInfo['content-type'] or "application/xhtml" in requestInfo['content-type']:
                                htmlContent = result.read();
                                try:
                                    self.response.out.write(self.request.get('callback')+"("+json.dumps(htmlContent)+")");
                                except:
                                    #this certainly isn't the best solution, but works for most common cases
                                    self.response.out.write(self.request.get('callback')+"("+json.dumps(unicode(htmlContent,"ISO-8859-1"))+")");
                            else:
                                self.response.out.write(self.request.get('callback')+"("+json.dumps("data:" + requestInfo['content-type'] + ";base64," + base64.b64encode( result.read()) )+")");
                    else:
                        self.response.headers['Content-Type'] = "application/javascript";
                        self.response.out.write( self.request.get('callback')+"("+json.dumps("error:Invalid mime:" + requestInfo['content-type']) +")" );
                else:
                    self.response.headers['Content-Type'] = "application/javascript";
                    self.response.out.write(self.request.get('callback')+"("+json.dumps( "error:Invalid protocol:" + urlInfo.scheme )+")" );

            except urllib2.URLError, e:
                self.response.headers['Content-Type'] = "application/javascript";
                self.response.out.write(self.request.get('callback')+"("+json.dumps( "error:Application error" ) +")" );


