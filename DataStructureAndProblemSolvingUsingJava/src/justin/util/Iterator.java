/**
 * 
 */
package justin.util;

/**
 * @author Justin Wu
 * 
 */
public interface Iterator<T> extends java.util.Iterator<T> {
	boolean hasNext();

	void remove();

	T next();
}
