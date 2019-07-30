<?php
namespace App\Controllers\Emails;

use Herbert\Framework\Http;

/**
 * Controlador de Suscripciones
 */
class EmailsController
{
    private $emailBarranquilla = '<div style="background: #ecf0f7; width: 100%; font-family: sans-serif; padding: 2em 0;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto; background: #fff;">
        <tbody>
          <tr>
            <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_01.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
          <tr>
            <td><table style="color: #858687;" border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td align="center"><p style="font-size: 1.4em;"><span style="font-weight: bold; color: #00377b;">Hola</span>
                      </p>
                      <p style="width: 74%; color: #858687; line-height: 130%;">Gracias por registrarte en el evento <strong>#ContigoConectados</strong> en la ciudad de Barranquilla.</p>
                      <p style="width: 86%; color: #858687; line-height: 130%;">Conocerás junto a nuestro presidente Marcelo Cataldo y el comunicador social y periodista Víctor Solano los resultados sobre el estudio de <strong>hábitos digitales en Colombia y cómo acompañar la experiencia de nuestros hijos en la red.</strong></p></td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td valign="bottom" width="44%"><img style="display: inherit;" src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_04.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                            <td style="padding-right: 5%;"><p style="text-align: center; font-weight: bold; color: #00377b; line-height: 130%;">Recuerda que el evento será:</p>
                              <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Fecha:</strong>&nbsp;1 de agosto de 2018</p>
                              <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Hora:</strong>&nbsp;8:00 a.m.</p>
                              <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Lugar:</strong> Auditorio Universidad del Norte / Km 5 Vía Puerto Colombia</p>
                              <p style="font-size: 1.3em; line-height: 143%; text-align: center;"><strong style="color: #003979;">¡Te esperamos!</strong></p></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  <tr>
                    <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td width="80%"><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_06.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                            <td><a href="https://www.tigo.com.co/" target="_blank"> <img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_07.jpg" width="100%" alt="contigo-conectados.jpg"> </a></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
        </tbody>
      </table>
          </div>
      ';

  private $pereira = '<div style="background: #ecf0f7; width: 100%; font-family: sans-serif; padding: 2em 0;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto; background: #fff;">
      <tbody>
        <tr>
          <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_01.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td><table style="color: #858687;" border="0" width="100%" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td align="center"><p style="font-size: 1.4em;"><span style="font-weight: bold; color: #00377b;">Hola</span>
                    </p>
                    <p style="width: 74%; color: #858687; line-height: 130%;">Gracias por registrarte en el evento <strong>#ContigoConectados</strong> en la ciudad de Pereira.</p>
                    <p style="width: 86%; color: #858687; line-height: 130%;">Conocerás junto a nuestro presidente Marcelo Cataldo y el comunicador social y periodista Víctor Solano los resultados sobre el estudio de <strong>hábitos digitales en Colombia y cómo acompañar la experiencia de nuestros hijos en la red.</strong></p></td>
                </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td valign="bottom" width="44%"><img style="display: inherit;" src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_04.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                          <td style="padding-right: 5%;"><p style="text-align: center; font-weight: bold; color: #00377b; line-height: 130%;">Recuerda que el evento será:</p>
                            <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Fecha:</strong>&nbsp;3 de agosto de 2018</p>
                            <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Hora:</strong>&nbsp;8:00 a.m.</p>
                            <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Lugar:</strong> Cra. 27 #10 - 02 / Universidad Tecnológica de Pereira Sala Magistral N1 1 Bloque Y.</p>
                            <p style="font-size: 1.3em; line-height: 143%; text-align: center;"><strong style="color: #003979;">¡Te esperamos!</strong></p></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="80%"><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_06.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                          <td><a href="https://www.tigo.com.co/" target="_blank"> <img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_07.jpg" width="100%" alt="contigo-conectados.jpg"> </a></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
      </tbody>
    </table>
      </div>
    ';

  private $cartagena = '<div style="background: #ecf0f7; width: 100%; font-family: sans-serif; padding: 2em 0;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto; background: #fff;">
      <tbody>
        <tr>
          <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_01.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td><table style="color: #858687;" border="0" width="100%" cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td align="center"><p style="font-size: 1.4em;"><span style="font-weight: bold; color: #00377b;">Hola</span>
                    </p>
                    <p style="width: 74%; color: #858687; line-height: 130%;">Gracias por registrarte en el evento <strong>#ContigoConectados</strong> en la ciudad de Cartagena.</p>
                    <p style="width: 86%; color: #858687; line-height: 130%;">Conocerás junto a nuestro presidente Marcelo Cataldo y el comunicador social y periodista Víctor Solano los resultados sobre el estudio de <strong>hábitos digitales en Colombia y cómo acompañar la experiencia de nuestros hijos en la red.</strong></p></td>
                </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td valign="bottom" width="44%"><img  style="display: inherit;" src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_04.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                          <td style="padding-right: 5%;"><p style="text-align: center; font-weight: bold; color: #00377b; line-height: 130%;">Recuerda que el evento será:</p>
                            <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Fecha:</strong>&nbsp;1 de agosto de 2018</p>
                            <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Hora:</strong>&nbsp;2:30 p.m.</p>
                            <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Lugar:</strong> Carrera 1 No. 5-01 / Hotel Intercontinental / Bocagrande.</p>
                            <p style="font-size: 1.3em; line-height: 143%; text-align: center;"><strong style="color: #003979;">¡Te esperamos!</strong></p></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="80%"><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_06.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                          <td><a href="https://www.tigo.com.co/" target="_blank"> <img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_07.jpg" width="100%" alt="contigo-conectados.jpg"> </a></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
      </tbody>
    </table>
      </div>
    ';

    private $bucaramanga = '<div style="background: #ecf0f7; width: 100%; font-family: sans-serif; padding: 2em 0;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto; background: #fff;">
        <tbody>
          <tr>
            <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_01.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
          <tr>
            <td><table style="color: #858687;" border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td align="center"><p style="font-size: 1.4em;"><span style="font-weight: bold; color: #00377b;">Hola</span>
                      </p>
                      <p style="width: 74%; color: #858687; line-height: 130%;">Gracias por registrarte en el evento <strong>#ContigoConectados</strong> en la ciudad de Bucaramanga.</p>
                      <p style="width: 86%; color: #858687; line-height: 130%;">Conocerás junto a nuestro presidente Marcelo Cataldo y el comunicador social y periodista Víctor Solano los resultados sobre el estudio de <strong>hábitos digitales en Colombia y cómo acompañar la experiencia de nuestros hijos en la red.</strong></p></td>
                  </tr>
                  <tr>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td valign="bottom" width="44%"><img style="display: inherit;" src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_04.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                            <td style="padding-right: 5%;"><p style="text-align: center; font-weight: bold; color: #00377b; line-height: 130%;">Recuerda que el evento será:</p>
                              <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Fecha:</strong>&nbsp;2 de agosto de 2018</p>
                              <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Hora:</strong>&nbsp;9:00 a.m.</p>
                              <p style="color: #858687;"><strong style="text-align: center; color: #00377b; line-height: 130%;">Lugar:</strong> Carrera 19 #36 - 20 Centro / Cámara de Comercio</p>
                              <p style="font-size: 1.3em; line-height: 143%; text-align: center;"><strong style="color: #003979;">¡Te esperamos!</strong></p></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  <tr>
                    <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td width="80%"><img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/Sin-t%C3%ADtulo-1_06.jpg" width="100%" alt="contigo-conectados.jpg"></td>
                            <td><a href="https://www.tigo.com.co/" target="_blank"> <img src="https://cdn2.hubspot.net/hubfs/2638078/Mails/Julio_2018/contigo-conectados_07.jpg" width="100%" alt="contigo-conectados.jpg"> </a></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
        </tbody>
      </table>
        </div>
      ';

    public function getEmailBarranquilla()
    {
        return $this->emailBarranquilla;
    }

    public function getEmailPereira()
    {
        return $this->pereira;
    }

    public function getEmailCartagena()
    {
        return $this->cartagena;
    }

    public function getEmailBucaramanga()
    {
        return $this->bucaramanga;
    }

    public function sendEmail(Http $request)
    {
        try{
            $ciudad = $request->input("ciudad");
            $email = $request->input("email");
            $message = "";
            $nameCity = "";

            switch($ciudad)
            {
              case "Barranquilla":
                $nameCity = "Barranquilla";
                $message = $this->getEmailBarranquilla();
              break;

              case "Bucaramanga":
                $nameCity = "Bucaramanga";
                $message = $this->getEmailBucaramanga();
              break;

              case "Cartagena":
                $nameCity = "Cartagena";
                $message = $this->getEmailCartagena();
              break;

              case "Pereira":
                $nameCity = "Pereira";
                $message = $this->getEmailPereira();
              break;
            }

            $headers[] = 'From: TigoUne <info@contigoconectados.com>';
            $headers[] = 'Content-Type: text/html; charset=UTF-8';
            $rtn = wp_mail( $email, $nameCity.", la cita es con los usos de Internet en Colombia", $message,$headers);
            return array("status"=>200,"message"=>$rtn);
        }catch(\Exception $e){
            return array("status"=>500,"message"=>$e->getMessage());
        }
    }
}
