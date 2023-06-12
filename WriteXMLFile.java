import java.io.File;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.parsers.ParserConfigurationException;
import javax.xml.transform.Transformer;
import javax.xml.transform.TransformerException;
import javax.xml.transform.TransformerFactory;
import javax.xml.transform.dom.DOMSource;
import javax.xml.transform.stream.StreamResult;

import org.w3c.dom.Attr;
import org.w3c.dom.Document;
import org.w3c.dom.Element;

public class WriteXMLFile {

	public static void main(String argv[]) {

	  try {

		DocumentBuilderFactory docFactory = DocumentBuilderFactory.newInstance();
		DocumentBuilder docBuilder = docFactory.newDocumentBuilder();

		Document doc = docBuilder.newDocument();
        
        //RSS tag
        Element rss = doc.createElement("rss");

        //Root element channel
        Element rootElement=doc.createElement("channel");
        
        //Title tag
        Element title = doc.createElement("title");
        title.appendChild(doc.createTextNode("Offers RSS Feed"));
        rootElement.appendChild(title);

        //Description tag
        Element desc = doc.createElement("description");
        desc.appendChild(doc.createTextNode("Food Offers"));
        rootElement.appendChild(desc);

        //Build tag
        Element build=doc.createElement("lastBuildDate");
        build.appendChild(doc.createTextNode("Sat, October 19 2019"));
        rootElement.appendChild(build);
        
        // Item tags
        Element item = doc.createElement("item");

        Element ititle=doc.createElement("title");
        ititle.appendChild(doc.createTextNode("Domino's Offer"));
        item.appendChild(ititle);

        Element ilink=doc.createElement("link");
        ilink.appendChild(doc.createTextNode("localhost/Webtech2/Dominos.php"));
        item.appendChild(ilink);

        Element idesc=doc.createElement("description");
        idesc.appendChild(doc.createTextNode("Offers from Dominos"));
        item.appendChild(idesc);

        rootElement.appendChild(item);

        rss.appendChild(rootElement);

        doc.appendChild(rss);

		// write the content into xml file
		TransformerFactory transformerFactory = TransformerFactory.newInstance();
		Transformer transformer = transformerFactory.newTransformer();
		DOMSource source = new DOMSource(doc);
		StreamResult result = new StreamResult(new File("/opt/lampp/htdocs/wt2_project/WT2_Organised/Offers2.xml"));

		// Output to console for testing
		// StreamResult result = new StreamResult(System.out);

		transformer.transform(source, result);

		System.out.println("File saved!");

	  } catch (ParserConfigurationException pce) {
		pce.printStackTrace();
	  } catch (TransformerException tfe) {
		tfe.printStackTrace();
	  }
	}
}
