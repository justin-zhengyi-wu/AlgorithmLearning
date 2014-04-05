/**
 * 
 */
package justin.test;


/**
 * @author Justin Wu
 * 
 */
public class IteratorTest {

    /**
     * @param args
     */
    public static void main(String[] args) {
    }
}

class SimpleStudent implements Comparable<SimpleStudent> {
    String name;

    int id;

    public SimpleStudent(String n, int i) {
        this.name = n;
        this.id = i;
    }

    public String toString() {
        return name + " " + id;
    }

    /*
     * (non-Javadoc)
     * 
     * @see java.lang.Object#hashCode()
     */
    @Override
    public int hashCode() {
        return name.hashCode();
    }

    /*
     * (non-Javadoc)
     * 
     * @see java.lang.Object#equals(java.lang.Object)
     */
    @Override
    public boolean equals(Object obj) {
        if (obj == null || getClass() != obj.getClass()) {
            return false;
        }
        SimpleStudent other = (SimpleStudent) obj;
        return name.equals(other.name);
    }

    /*
     * (non-Javadoc)
     * 
     * @see java.lang.Comparable#compareTo(java.lang.Object)
     */
    @Override
    public int compareTo(SimpleStudent o) {
        // TODO Auto-generated method stub
        return 0;
    }

}
